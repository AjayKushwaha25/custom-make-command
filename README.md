## Custom Make Command For Laravel

This package allows you to create custom make commands for your Laravel application, such as `make:trait` and more.

## Installation

To install this package, require it using Composer. It is recommended to only require the package for development purposes.

```shell
composer require ajaykushwaha25/custom-make-command
```

Since Laravel uses Package Auto-Discovery, you don't need to manually add the ServiceProvider.

### Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
AjayKushwaha25\CustomMakeCommand\MakeCommandServiceProvider::class,
```

## Commands available

The following commands are available after installing this package:

```shell
php artisan make:trait CustomTrait
php artisan custom:class CustomClass
php artisan custom:action ActionClass
php artisan custom:service ServiceClass
```

The `make:trait` command will create a trait file in the `App\Traits` folder.

The `custom:class` command will create a custom class file in the `App` folder. You can also specify a specific folder in which the class file should be generated. Note: The specified folder will be created inside the `App` folder.

## UsesUUID Trait

The `UsesUUID` trait allows you to easily add UUID (Universally Unique Identifier) functionality to your Laravel model classes.

### Usage

To use the UsesUUID trait in your model class, follow these steps:

1. Import the trait at the top of your model class file:

```php
use AjayKushwaha25\CustomMakeCommand\Traits\UsesUUID;
```

2. Apply the trait to your model class:

```php
class MyModel extends Model
{
    use UsesUUID;
    
    // ...
}
```

That's it! Your model class now has the UUID functionality provided by the `UsesUUID` trait.
