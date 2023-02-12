## Custom Make Command For Laravel

This is a package for creating custom make command for your application like make:trait, etc.

## Installation

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require ajaykushwaha25/custom-make-command
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

### Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
AjayKushwaha25\CustomMakeCommand\MakeCommandServiceProvider::class,
```
