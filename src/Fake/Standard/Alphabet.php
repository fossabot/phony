<?php

namespace Deligoez\Phony\Fake\Standard;

use Deligoez\Phony\Fake\Fake;

/**
 * Class Alphabet.
 *
 *
 * @property string uppercase_letter
 * @property string lowercase_letter
 * @property string letter
 */
class Alphabet extends Fake
{
    protected array $attributes = [
        'uppercase_letter' => ['alphabet.uppercase_letter'],
        'lowercase_letter' => ['alphabet.lowercase_letter'],
        'letter'           => ['alphabet.letter'],
    ];
}