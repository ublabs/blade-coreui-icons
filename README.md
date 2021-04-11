<p align="center">
    <img src="https://github.com/ublabs/art/blob/main/socialcard/blade-coreui-icons.png" width="1280" title="Social Card Blade CoreUI Icons">
</p>

# Blade CoreUI Icons

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ublabs/blade-coreui-icons.svg?style=flat-square)](https://packagist.org/packages/ublabs/blade-coreui-icons)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ublabs/blade-coreui-icons/run-tests?label=tests)](https://github.com/ublabs/blade-coreui-icons/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ublabs/blade-coreui-icons/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ublabs/blade-coreui-icons/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ublabs/blade-coreui-icons.svg?style=flat-square)](https://packagist.org/packages/ublabs/blade-coreui-icons)

A package to easily make use of [CoreUI Icons](https://icons.coreui.io/icons/) in your Laravel Blade views.

For a full list of available icons see the [SVG directory](./resources/svg).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

You can install the package via composer:

```bash
composer require ublabs/blade-coreui-icons
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-cui-cib-500px-5 />
```

You can also pass classes to your icon components:

```blade
<x-cui-cib-500px-5 class="w-6 h-6 text-red-500"/>
```

And even use inline styles:

```blade
<x-cui-cib-500px-5 style="color: #FF2D20"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-coreui-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-coreui-icons/cib-500px-5.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade CoreUI Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Adrián UB](https://github.com/adrian-ub)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.