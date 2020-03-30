<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

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
