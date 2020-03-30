<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Coin.
 *
 *
 * @property string flip
 * @property string name
 */
class Coin extends Fake
{
    protected array $attributes = [
        'flip'  => ['coin.flip'],
        'name' => ['coin.name'],
    ];
}
