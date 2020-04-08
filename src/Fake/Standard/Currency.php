<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;

/**
 * Class Currency.
 *
 *
 * @property-read string name
 * @property-read string code
 * @property-read string symbol
 */
class Currency extends Fake
{
    protected array $attributes = [
        'name'   => ['currency.name'],
        'code'   => ['currency.code'],
        'symbol' => ['currency.symbol'],
    ];
}
