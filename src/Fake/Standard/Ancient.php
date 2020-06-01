<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

/**
 * Class Ancient.
 *
 *
 * @property-read string god
 * @property-read string primordial
 * @property-read string titan
 * @property-read string hero
 */
class Ancient extends Fake
{
    protected array $attributes = [
        'god'        => ['standard.ancient.god'],
        'primordial' => ['standard.ancient.primordial'],
        'titan'      => ['standard.ancient.titan'],
        'hero'       => ['standard.ancient.hero'],
    ];
}
