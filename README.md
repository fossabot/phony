[![Phony Logo](.github/asset/phony-logo.png)](https://github.com/phony-php/phony)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/phony-php/phony.svg?style=flat-square)](https://packagist.org/packages/phony-php/phony)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phony-php/phony/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/phony-php/phony/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/phony-php/phony/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/phony-php/phony/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/phony-php/phony/badges/build.png?b=master)](https://scrutinizer-ci.com/g/phony-php/phony/build-status/master)
[![Total Downloads](https://img.shields.io/packagist/dt/phony-php/phony.svg?style=flat-square)](https://packagist.org/packages/phony-php/phony)
![Packagist](https://img.shields.io/packagist/l/phony-php/phony)
[![Open Source Love](https://badges.frapsoft.com/os/v3/open-source.svg?v=102)](https://github.com/ellerbrock/open-source-badge/) 

### This package is in active development and not production ready.

**Phony** is a PHP package that can generate a wide range of fake data.

**Phony** is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), Ruby's [Faker](https://github.com/faker-ruby/faker), [ffaker](https://github.com/ffaker/ffaker) and PHP's [Faker](https://github.com/fzaninotto/Faker).
 
**Phony** requires `PHP` >= `7.4`.

## Installation

You can install the package via composer:

``` bash
composer require phony-php/phony
```

## Usage

``` php
use PhonyPHP\Phony\Phony;

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

### Standard

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

If you discover any security related issues, please email phony@deligoz.me instead of using the issue tracker.

## Credits

- [Yunus Emre Deligöz](https://github.com/deligoez)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
