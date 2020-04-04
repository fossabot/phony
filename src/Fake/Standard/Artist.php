<?php

namespace Deligoez\Phony\Fake\Standard;

use Deligoez\Phony\Fake\Fake;

/**
 * Class Artist.
 *
 *
 * @property string name
 */
class Artist extends Fake
{
    protected array $attributes = [
        'name' => ['artist.name'],
    ];
}
