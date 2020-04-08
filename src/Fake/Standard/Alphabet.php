<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;

/**
 * Class Alphabet.
 *
 *
 * @property-read string uppercase_letter
 * @property-read string lowercase_letter
 * @property-read string letter
 */
class Alphabet extends Fake
{
    protected array $attributes = [
        'uppercase_letter' => ['alphabet.uppercase_letter'],
        'lowercase_letter' => ['alphabet.lowercase_letter'],
        'letter'           => ['alphabet.letter'],
    ];
}
