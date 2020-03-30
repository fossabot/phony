<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

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
        'primordial' => ['ancient.god'],
        'titan'      => ['ancient.titan'],
        'hero'       => ['ancient.hero'],
    ];
}
