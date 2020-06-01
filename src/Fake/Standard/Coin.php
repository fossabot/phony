<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

/**
 * Class Coin.
 *
 *
 * @property-read string flip
 * @property-read string name
 */
class Coin extends Fake
{
    protected array $attributes = [
        'flip' => ['standard.coin.flip'],
        'name' => ['standard.coin.name'],
    ];
}
