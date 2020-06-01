<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

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
        'name'   => ['standard.currency.name'],
        'code'   => ['standard.currency.code'],
        'symbol' => ['standard.currency.symbol'],
    ];
}
