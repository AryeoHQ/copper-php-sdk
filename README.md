# Copper PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aryeo/copper-sdk.svg?style=flat-square)](https://packagist.org/packages/aryeo/copper-sdk)
[![Quality Score](https://img.shields.io/scrutinizer/g/aryeo/copper-sdk.svg?style=flat-square)](https://scrutinizer-ci.com/g/aryeo/copper-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/aryeo/copper-sdk.svg?style=flat-square)](https://packagist.org/packages/aryeo/copper-sdk)

This package provides a PHP SDK for interacting with the [Copper CRM API](https://developer.copper.com/index.html).
It's used primarily in order to sync leads collected from external sources with Copper. On the [Aryeo](https://www.aryeo.com/) platform, leads are generated from property websites and other marketing materials. This SDK is leveraged to sync, tag, and/or assign these leads with contacts in Copper..

## Installation

You can install the package via composer:

```bash
composer require aryeo/copper
```

## Usage

``` php
use Aryeo\Copper\Copper;

$token = 'your-api-token';
$user_email = 'useremail@usedfortoken.com';

$client = new Copper($token, $user_email);
$client->users()->search();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email yaz@aryeo.com instead of using the issue tracker.

## Credits

- [Yaz Jallad](https://github.com/ninjaparade)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

