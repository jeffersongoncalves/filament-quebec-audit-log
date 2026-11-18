<?php

namespace JeffersonGoncalves\Filament\QuebecAuditLog\Resources\AuditLogs;

use Filament\Infolists\Components\KeyValueEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\QuebecAuditLog\QuebecAuditLogPlugin;
use JeffersonGoncalves\Filament\QuebecAuditLog\Resources\AuditLogs\Pages\ListAuditLogs;
use JeffersonGoncalves\Filament\QuebecAuditLog\Resources\AuditLogs\Pages\ViewAuditLog;
use JeffersonGoncalves\QuebecAuditLog\Models\AuditLog;

/**
 * Read-only: the audit log is append-only and hash-chained.
 */
class AuditLogResource extends Resource
{
    protected static ?string $model = AuditLog::class;

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(1)
            ->schema([
                Section::make()
                    ->columns(2)
                    ->schema([
                        TextEntry::make('created_at')
                            ->label(static::label('fields.created_at'))
                            ->dateTime(),
                        TextEntry::make('action')
                            ->label(static::label('fields.action'))
                            ->formatStateUsing(fn (string $state): string => static::action($state))
                            ->badge()
                            ->color(fn (string $state): string => static::actionColor($state)),
                        TextEntry::make('actor')
                            ->label(static::label('fields.actor'))
                            ->state(fn (AuditLog $record): ?string => static::morph($record, 'actor'))
                            ->placeholder(static::label('system')),
                        TextEntry::make('subject')
                            ->label(static::label('fields.subject'))
                            ->state(fn (AuditLog $record): ?string => static::morph($record, 'subject'))
                            ->placeholder('-'),
                        TextEntry::make('columns')
                            ->label(static::label('fields.columns'))
                            ->badge()
                            ->color('gray')
                            ->placeholder('-'),
                        TextEntry::make('purpose')
                            ->label(static::label('fields.purpose'))
                            ->placeholder('-'),
                        TextEntry::make('ip_address')
                            ->label(static::label('fields.ip_address'))
                            ->placeholder('-'),
                        TextEntry::make('user_agent')
                            ->label(static::label('fields.user_agent'))
                            ->placeholder('-'),
                        KeyValueEntry::make('metadata')
                            ->label(static::label('fields.metadata'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('hash')
                            ->label(static::label('fields.hash'))
                            ->fontFamily('mono')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label(static::label('fields.created_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('actor')
                    ->label(static::label('fields.actor'))
                    ->state(fn (AuditLog $record): ?string => static::morph($record, 'actor'))
                    ->placeholder(static::label('system')),
                TextColumn::make('action')
                    ->label(static::label('fields.action'))
                    ->formatStateUsing(fn (string $state): string => static::action($state))
                    ->badge()
                    ->color(fn (string $state): string => static::actionColor($state)),
                TextColumn::make('subject')
                    ->label(static::label('fields.subject'))
                    ->state(fn (AuditLog $record): ?string => static::morph($record, 'subject'))
                    ->placeholder('-'),
                TextColumn::make('columns')
                    ->label(static::label('fields.columns'))
                    ->badge()
                    ->color('gray')
                    ->placeholder('-'),
                TextColumn::make('purpose')
                    ->label(static::label('fields.purpose'))
                    ->limit(40)
                    ->placeholder('-')
                    ->toggleable(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                SelectFilter::make('action')
                    ->label(static::label('fields.action'))
                    ->options(fn (): array => AuditLog::query()->distinct()->orderBy('action')->pluck('action')
                        ->mapWithKeys(fn (string $action): array => [$action => static::action($action)])->all()),
                SelectFilter::make('subject_type')
                    ->label(static::label('fields.subject_type'))
                    ->options(fn (): array => AuditLog::query()->whereNotNull('subject_type')->distinct()->orderBy('subject_type')->pluck('subject_type')
                        ->mapWithKeys(fn (string $type): array => [$type => class_basename(Model::getActualClassNameForMorph($type))])->all()),
            ])
            ->actions([
                ViewAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAuditLogs::route('/'),
            'view' => ViewAuditLog::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function label(string $key): string
    {
        return __("filament-quebec-audit-log::filament-quebec-audit-log.{$key}");
    }

    /**
     * Known actions are translated; custom ones (QuebecAuditLog::record('exported')...) are shown as they are.
     */
    public static function action(string $action): string
    {
        $key = "filament-quebec-audit-log::filament-quebec-audit-log.actions.{$action}";
        $label = __($key);

        return $label === $key ? $action : $label;
    }

    public static function actionColor(string $action): string
    {
        return match ($action) {
            'anonymized', 'deleted' => 'danger',
            'updated', 'exported' => 'warning',
            default => 'gray',
        };
    }

    public static function morph(AuditLog $record, string $relation): ?string
    {
        $type = $record->getAttribute("{$relation}_type");

        return is_string($type)
            ? class_basename(Model::getActualClassNameForMorph($type)).' #'.$record->getAttribute("{$relation}_id")
            : null;
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return QuebecAuditLogPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return QuebecAuditLogPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): ?string
    {
        return QuebecAuditLogPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(): string
    {
        return QuebecAuditLogPlugin::get()->getSlug();
    }
}
