<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;

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
