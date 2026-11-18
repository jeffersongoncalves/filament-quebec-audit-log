<div class="filament-hidden">

![Filament Quebec Audit Log](https://raw.githubusercontent.com/jeffersongoncalves/filament-quebec-audit-log/1.x/art/jeffersongoncalves-filament-quebec-audit-log.png)

</div>

# Filament Quebec Audit Log

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-quebec-audit-log.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-quebec-audit-log)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-quebec-audit-log/tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-quebec-audit-log/actions?query=workflow%3Atests+branch%3A1.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-quebec-audit-log/fix-php-code-style-issues.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-quebec-audit-log/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-quebec-audit-log.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-quebec-audit-log)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-quebec-audit-log.svg?style=flat-square)](LICENSE.md)

Browse the audit trail of [laravel-quebec-audit-log](https://github.com/jeffersongoncalves/laravel-quebec-audit-log) from your Filament panel: who viewed, changed, exported or anonymized whose personal information, when and why, to show the protection Quebec's private sector privacy act (Law 25) expects (ss. 3.1 and 10). You can also check that nobody tampered with it.

## Features

- Every entry: when, who, action, person concerned, columns (names only, never values) and purpose.
- Filters by action and by model of the person concerned.
- View page with the IP address, user agent, metadata and the entry's hash.
- Who opens the list or an entry, and who verifies the chain, is logged too.
- **Verify chain:** checks the hash chain and tells you which entry was altered, removed or inserted.
- Read-only, like the log itself.
- 19 languages. Custom actions you record are shown as they are.

## Compatibility

| Plugin Version                                                                | Filament |
|-------------------------------------------------------------------------------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-quebec-audit-log/tree/1.x) | 3.x      |
| [2.x](https://github.com/jeffersongoncalves/filament-quebec-audit-log/tree/2.x) | 4.x      |
| [3.x](https://github.com/jeffersongoncalves/filament-quebec-audit-log/tree/3.x) | 5.x      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-quebec-audit-log:"^1.0"
php artisan vendor:publish --tag="quebec-audit-log-migrations"
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\QuebecAuditLog\QuebecAuditLogPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            QuebecAuditLogPlugin::make()
                ->navigationGroup('Quebec')             // default: no group
                ->navigationSort(50)
                ->navigationIcon('heroicon-o-document-magnifying-glass')
                ->slug('audit-log')
                ->logViews(),                         // log who reads the log (default: on)
        ]);
}
```

All fluent methods are optional. Reading the log is logged too, with the purpose `Audit log review`: opening the list or an entry adds a `viewed` entry (its subject is the entry opened), and checking the chain adds a `verified` entry with the result. Turn it off with `->logViews(false)`.

> The resource has no authorization of its own: register it only on panels whose users may read the audit log, or add a policy for `JeffersonGoncalves\QuebecAuditLog\Models\AuditLog`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
