# Copper PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aryeo/copper-sdk.svg?style=flat-square)](https://packagist.org/packages/aryeo/copper-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/aryeo/copper-sdk.svg?style=flat-square)](https://packagist.org/packages/aryeo/copper-sdk)

This package provides a PHP SDK for interacting with the [Copper CRM API](https://developer.copper.com/index.html).
It's used primarily in order to sync leads collected from external sources with Copper. On the [Aryeo](https://www.aryeo.com/) platform, leads are generated from property websites and other marketing materials. This SDK is leveraged to sync, tag, and/or assign these leads with contacts in Copper..

## Installation

You can install the package via composer:

```bash
composer require aryeo/copper-sdk
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

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

