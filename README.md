# saveconfig

Extends Laravel's Config component with save-to-file functionality.

## Table of Contents

- <a href="#installation">Installation</a>
    - <a href="#composer">Composer</a>
    - <a href="#manually">Manually</a>
    - <a href="#laravel-4">Laravel 4</a>
- <a href="#usage">Usage</a>
- <a href="#license">License</a>

## Installation

### Composer

Add the following to the require section of your `composer.json` file:

    "tjbp/saveconfig": "dev"

Run `composer update` to get the latest version of the package.

### Manually

Download and install from this repository.

### Laravel 4

A service provider for Laravel 4 is provided. After installing with Composer, you must register the service provider with your application:

Open `app/config/app.php` and find the `providers` key. Add `SaveConfigServiceProvider` to the array.

## Usage

The crucial method added to the Config class is save().

```php
Config::set('debug', true);

Config::save();
```

## License

This software is licensed under the GPLv3, see the `LICENSE` file for more details.
