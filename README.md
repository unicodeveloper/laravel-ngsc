# laravel-ngsc

[![Latest Stable Version](https://poser.pugx.org/unicodeveloper/laravel-ngsc/v/stable.svg)](https://packagist.org/packages/unicodeveloper/laravel-ngsc)
![](https://img.shields.io/badge/unicodeveloper-approved-brightgreen.svg)
[![License](https://poser.pugx.org/unicodeveloper/laravel-ngsc/license.svg)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/unicodeveloper/laravel-ngsc.svg)](https://travis-ci.org/unicodeveloper/laravel-ngsc)
[![Quality Score](https://img.shields.io/scrutinizer/g/unicodeveloper/laravel-ngsc.svg?style=flat-square)](https://scrutinizer-ci.com/g/unicodeveloper/laravel-ngsc)
[![Total Downloads](https://img.shields.io/packagist/dt/unicodeveloper/laravel-ngsc.svg?style=flat-square)](https://packagist.org/packages/unicodeveloper/laravel-ngsc)

> Laravel 5 Package to get states and cities in Nigeria

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Ngsc, simply add the following line to the require block of your `composer.json` file.

```
"unicodeveloper/laravel-ngsc": "1.0.*"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Identify is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `Unicodeveloper\Ngsc\NgscServiceProvider::class`

Also, register the Facade like so:

```php
'aliases' => [
    ...
    'Ngsc' => Unicodeveloper\Ngsc\Facades\NgscFacade::class,
    ...
]
```

## Configuration

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Unicodeveloper\Ngsc\NgscServiceProvider"
```


## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.


## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/unicodeveloper)!

Thanks!
Prosper Otemuyiwa.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
