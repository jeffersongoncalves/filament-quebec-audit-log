<?php

namespace JeffersonGoncalves\Filament\QuebecAuditLog;

use Filament\Panel;
use JeffersonGoncalves\Filament\QuebecAuditLog\Resources\AuditLogs\AuditLogResource;
use JeffersonGoncalves\FilamentPluginCore\BasePlugin;

class QuebecAuditLogPlugin extends BasePlugin
{
    protected ?string $navigationGroup = null;

    protected ?int $navigationSort = null;

    protected string $navigationIcon = 'heroicon-o-document-magnifying-glass';

    protected string $slug = 'audit-log';

    protected bool $logViews = true;

    /**
     * Log who reads the log: a "viewed" entry when someone opens the list or an entry, a "verified" one when the chain is checked.
     */
    public function logViews(bool $condition = true): static
    {
        $this->logViews = $condition;

        return $this;
    }

    public function shouldLogViews(): bool
    {
        return $this->logViews;
    }

    public function getId(): string
    {
        return 'filament-quebec-audit-log';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            AuditLogResource::class,
        ]);
    }

    public function navigationGroup(?string $group): static
    {
        $this->navigationGroup = $group;

        return $this;
    }

    public function getNavigationGroup(): ?string
    {
        return $this->navigationGroup;
    }

    public function navigationSort(?int $sort): static
    {
        $this->navigationSort = $sort;

        return $this;
    }

    public function getNavigationSort(): ?int
    {
        return $this->navigationSort;
    }

    public function navigationIcon(string $icon): static
    {
        $this->navigationIcon = $icon;

        return $this;
    }

    public function getNavigationIcon(): string
    {
        return $this->navigationIcon;
    }

    public function slug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
