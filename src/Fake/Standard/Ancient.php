<?php

namespace Deligoez\Phony\Fake\Standard;

use Deligoez\Phony\Fake\Fake;

/**
 * Class Ancient.
 *
 *
 * @property string god
 * @property string primordial
 * @property string titan
 * @property string hero
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
