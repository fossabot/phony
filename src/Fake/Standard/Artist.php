<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

/**
 * Class Artist.
 *
 *
 * @property-read string name
 */
class Artist extends Fake
{
    protected array $attributes = [
        'name' => ['standard.artist.name'],
    ];
}
