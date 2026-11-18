<?php

namespace JeffersonGoncalves\Filament\QuebecAuditLog\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\QuebecAuditLog\QuebecAuditLogPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                QuebecAuditLogPlugin::make(),
            ]);
    }
}
