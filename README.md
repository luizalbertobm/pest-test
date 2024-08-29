# pest-test study

This is a study project to test the [pest](https://pestphp.com/) testing framework.

## Installation

```bash
composer install
```

## Start local PHP server
```bash
composer start
```

## Stop local PHP server
```bash
composer stop
```

## Run tests

```bash
./vendor/bin/pest
```

## Run tests with coverage
To run tests with coverage, you need to have the `xdebug` extension installed and enabled in your PHP configuration.

You also need to enable xdebug coverage in your `php.ini` file. Add the following line to your `php.ini` file:

```ini
[xdebug]
zend_extension=xdebug.so
xdebug.mode=debug,coverage
xdebug.start_with_request=default
```

Then run the following command:


```bash
./vendor/bin/pest --coverage
```