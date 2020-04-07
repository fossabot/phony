<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;

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
