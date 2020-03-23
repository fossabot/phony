# 🙃 Phony

### This package is in active development and not production ready.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deligoez/phony.svg?style=flat-square)](https://packagist.org/packages/deligoez/phony)
[![Build Status](https://img.shields.io/travis/deligoez/phony/master.svg?style=flat-square)](https://travis-ci.org/deligoez/phony)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/deligoez/phony/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/deligoez/phony/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/deligoez/phony/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/deligoez/phony/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/deligoez/phony/badges/build.png?b=master)](https://scrutinizer-ci.com/g/deligoez/phony/build-status/master)
[![Total Downloads](https://img.shields.io/packagist/dt/deligoez/phony.svg?style=flat-square)](https://packagist.org/packages/deligoez/phony)
![Packagist](https://img.shields.io/packagist/l/deligoez/phony)
[![Open Source Love](https://badges.frapsoft.com/os/v3/open-source.svg?v=102)](https://github.com/ellerbrock/open-source-badge/) 

This [Laravel](http://laravel.com) package is port of the [Ruby](https://www.ruby-lang.org)'s [Faker](https://github.com/faker-ruby/faker) gem that generates fake data.

## Installation

You can install the package via composer:

```bash
composer require deligoez/phony
```

## Usage

```php
$phony = new \Deligoez\Phony\Phony('en');

$phony->coin()->flip();         // => "Heads"
$phony->currency()->symbol();   // => "$"
```

## Generators

### Default

- [Phony::alphabet()](doc/default/alphabet.md)
- [Phony::ancient()](doc/default/ancient.md)
- [Phony::coin()](doc/default/coin.md)
- [Phony::currency()](doc/default/currency.md)
- [Phony::person()](doc/default/person.md)

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ye@deligoz.me instead of using the issue tracker.

## Credits

- [Yunus Emre Deligöz](https://github.com/deligoez)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.