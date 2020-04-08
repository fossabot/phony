<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;

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
        'god'        => ['ancient.god'],
        'primordial' => ['ancient.primordial'],
        'titan'      => ['ancient.titan'],
        'hero'       => ['ancient.hero'],
    ];
}
