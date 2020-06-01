<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

/**
 * Class Alphabet.
 *
 *
 * @property-read string uppercase_letter
 * @property-read string lowercase_letter
 * @property-read string letter
 * @property-read string punctuation_mark
 * @property-read string ascii_uppercase_letter
 * @property-read string ascii_lowercase_letter
 * @property-read string ascii_letter
 */
class Alphabet extends Fake
{
    protected array $attributes = [
        'uppercase_letter' => ['standard.alphabet.uppercase_letter'],
        'lowercase_letter' => ['standard.alphabet.lowercase_letter'],
        'letter'           => ['standard.alphabet.letter'],
        'punctuation_mark' => ['standard.alphabet.punctuation_mark'],
    ];

    protected array $methodsAsAttributes = [
        'ascii_uppercase_letter' => [],
        'ascii_lowercase_letter' => [],
        'ascii_letter'           => [],
    ];

    public function ascii_uppercase_letter(): string
    {
        return chr($this->phony->number->integerBetween(65, 90));
    }

    public function ascii_lowercase_letter(): string
    {
        return chr($this->phony->number->integerBetween(97, 122));
    }

    public function ascii_letter(): string
    {
        return $this->phony->boolean->boolean
            ? $this->ascii_uppercase_letter()
            : $this->ascii_lowercase_letter();
    }
}
