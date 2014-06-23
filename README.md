# SaveConfig

Extends Laravel's Config component with save functionality. This can allow your users to configure the application via the application.

## Table of Contents

- <a href="#installation">Installation</a>
- <a href="#usage">Usage</a>
- <a href="#known-issues">Known Issues</a>
- <a href="#license">Licence</a>

## Installation

Add the following to the require section of your `composer.json` file:

    "tjbp/saveconfig": "dev"

After which run `composer update` to get the latest version of the package.

To register the included service provider with your application:

Open `app/config/app.php` and find the `providers` key. Add `SaveConfigServiceProvider` to the array.

## Usage

This extension adds a save() method to the Config class, which will save a Laravel-compatible copy of the current environment's config to your environment directory, normally found within app/config.

```php
// Set a configuration value at run-time as normal
Config::set('debug', true);

// Save all configuration values, including those set at run-time, to the current environment
Config::save();
```

Remember to be particularly vigilant in validating the configuration values, as well as preventing any assignment of keys that shouldn't be configurable.

It is recommended that your app's detectEnvironment() callback (found in bootstrap/start.php) return a default value other than "production", as that environment's configuration files are normally tracked and relied on for defaults, which could make application upgrades troublesome. Since this extension is most useful when used in combination with a white-label application, a good choice for a default environment would be the application's name (eg. "wordpress"). You can then ignore app/config/wordpress/* with your flavour of version control software, while adopting values inside app/config/* as defaults.

When working within a development environment, be sure to commit any changes to your configuraton before calling Config::save(), or the changes could be overwritten.

## Known Issues

- Constants used as configuration values will be saved as their value, rather than their symbolic name, possibly causing version portability issues.
- Inherited values from the "production" environment will be included in a save.
- Saved configurations are valid PHP, but not formatted prettily or consistently with Laravel's default configuration.

## Licence

This software is licensed under the GPLv3, see the `LICENCE` file for more details.
