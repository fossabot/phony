[![Phony Logo](.github/assets/phony-logo.png)](https://github.com/deligoez/phony)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deligoez/phony.svg?style=flat-square)](https://packagist.org/packages/deligoez/phony)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/deligoez/phony/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/deligoez/phony/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/deligoez/phony/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/deligoez/phony/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/deligoez/phony/badges/build.png?b=master)](https://scrutinizer-ci.com/g/deligoez/phony/build-status/master)
[![Total Downloads](https://img.shields.io/packagist/dt/deligoez/phony.svg?style=flat-square)](https://packagist.org/packages/deligoez/phony)
![Packagist](https://img.shields.io/packagist/l/deligoez/phony)
[![Open Source Love](https://badges.frapsoft.com/os/v3/open-source.svg?v=102)](https://github.com/ellerbrock/open-source-badge/) 

### This package is in active development and not production ready.

This PHP package is port of the [Ruby](https://www.ruby-lang.org)'s [Faker](https://github.com/faker-ruby/faker) gem that generates fake data.

## Installation

You can install the package via composer:

``` bash
composer require deligoez/phony
```

## Usage

``` php
use Deligoez\Phony\Phony;

$🙃 = new Phony('en');

$🙃->address->city;             // => "Imogeneborough"
$🙃->📫->city;                  // => "Imogeneborough"

$🙃->alphabet->uppercaseLetter; // => "P"
$🙃->🔤->uppercaseLetter;       // => "P"

$🙃->ancient->god;              // => "Zeus"
$🙃->📜->god;                   // => "Zeus"

$🙃->coin->flip;                // => "Heads"

$🙃->currency->name;            // => "Swedish Krona"

$🙃->person->name;              // => "Tyshawn Johns Sr."
```

## Fakes

### Default

- [$🙃->address](doc/default/address.md)
- [$🙃->alphabet](doc/default/alphabet.md)
- [$🙃->ancient](doc/default/ancient.md)
- [$🙃->artist](doc/default/artist.md)
- [$🙃->coin](doc/default/coin.md)
- [$🙃->cosmere](doc/default/cosmere.md)
- [$🙃->currency](doc/default/currency.md)
- [$🙃->person](doc/default/person.md)
- [$🙃->slack_emoji](doc/default/slack_emoji.md)

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
