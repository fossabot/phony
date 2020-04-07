<?php

namespace PhonyPHP\Phony\Fake\Standard;

use PhonyPHP\Phony\Fake\Fake;

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
