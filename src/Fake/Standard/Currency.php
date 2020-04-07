<?php

namespace PhonyPHP\Phony\Fake\Standard;

use PhonyPHP\Phony\Fake\Fake;

/**
 * Class Currency.
 *
 *
 * @property string name
 * @property string code
 * @property string symbol
 */
class Currency extends Fake
{
    protected array $attributes = [
        'name'   => ['currency.name'],
        'code'   => ['currency.code'],
        'symbol' => ['currency.symbol'],
    ];
}
