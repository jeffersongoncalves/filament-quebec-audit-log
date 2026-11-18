<?php

namespace JeffersonGoncalves\Filament\QuebecAuditLog\Resources\AuditLogs\Pages;

use Filament\Resources\Pages\ViewRecord;
use JeffersonGoncalves\Filament\QuebecAuditLog\QuebecAuditLogPlugin;
use JeffersonGoncalves\Filament\QuebecAuditLog\Resources\AuditLogs\AuditLogResource;
use JeffersonGoncalves\QuebecAuditLog\AuditLogger;

class ViewAuditLog extends ViewRecord
{
    protected static string $resource = AuditLogResource::class;

    public function mount(int|string $record): void
    {
        parent::mount($record);

        // Opening an entry shows IP address, user agent and metadata: audit who reads the log too.
        if (QuebecAuditLogPlugin::get()->shouldLogViews()) {
            app(AuditLogger::class)->record('viewed', $this->getRecord(), purpose: 'Audit log review');
        }
    }
}
