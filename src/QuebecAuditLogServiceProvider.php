<?php

namespace JeffersonGoncalves\Filament\QuebecAuditLog;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class QuebecAuditLogServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-quebec-audit-log';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
