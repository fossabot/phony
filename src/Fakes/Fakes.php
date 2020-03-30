<?php

namespace Deligoez\Phony\Fakes;

use Deligoez\Phony\Fakes\Standard\Address;
use Deligoez\Phony\Fakes\Standard\Alphabet;
use Deligoez\Phony\Fakes\Standard\Ancient;
use Deligoez\Phony\Fakes\Standard\Artist;
use Deligoez\Phony\Fakes\Standard\Coin;
use Deligoez\Phony\Fakes\Standard\Cosmere;
use Deligoez\Phony\Fakes\Standard\Currency;
use Deligoez\Phony\Fakes\Standard\Person;

final class Fakes
{
    public const default = [
        'address'  => Address::class,
        '📫'       => Address::class,
        'alphabet' => Alphabet::class,
        '🔤'       => Alphabet::class,
        'ancient'  => Ancient::class,
        '📜'       => Ancient::class,
        'artist'   => Artist::class,
        'coin'     => Coin::class,
        'cosmere'  => Cosmere::class,
        'currency' => Currency::class,
        'person'   => Person::class,
    ];
}
