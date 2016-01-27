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

Once Laravel Ngsc is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

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

## Usage

You can use it in your controller by using Dependency Injection like so:

```php
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Unicodeveloper\Ngsc\Ngsc;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    protected $ngsc;

    public function __construct(Ngsc $ngsc)
    {
        $this->ngsc = $ngsc;
    }

    /**
     * Get all states
     * @return array
     */
    public function getAllStates()
    {
        return $this->ngsc->getAllStates();
    }
}
```

You can also simply use the awesome Facades like so:

```php

/**
 * Gets all the states in Nigeria
 * @return array
 */
Ngsc::getAllStates()

/**
 * Gets the details of just one state, e.g capital, lat, lng
 * @param string  state or state code
 * @return array
 */
Ngsc::getOneState('lagos') OR Ngsc::getOneState('LA')

/**
 * Gets the local government areas of just one state
 * @param string  state or state code
 * @return array
 */
Ngsc::getLGAS('lagos') OR Ngsc::getLGAS('LA')

/**
 * Gets the cities of just one state
 * @param string  state or state code
 * @return array
 */
Ngsc::getCities('lagos') OR Ngsc::getCities('LA')
```

## Appreciation

Huge thanks go to the [Devcenter.co](http://devcenter.co) crew for providing a fluent and awesome API

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/unicodeveloper)!

Thanks!
Prosper Otemuyiwa.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
