<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

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
    /**
     * Retrieves an uppercase letter.
     *
     * @return string
     *
     * @example 🙃::alphabet()->uppercase_letter() // => "P"
     */
    protected function uppercase_letter(): string
    {
        return $this->fetch('alphabet.uppercase_letter');
    }

    /**
     * Retrieves a lowercase letter.
     *
     * @return string
     *
     * @example 🙃::alphabet()->lowercase_letter() // => "P"
     */
    protected function lowercase_letter(): string
    {
        return $this->fetch('alphabet.lowercase_letter');
    }

    /**
     * Retrieves a letter.
     *
     * @return string
     *
     * @example 🙃::alphabet()->letter() // => "P"
     */
    protected function letter(): string
    {
        return $this->fetch('alphabet.letter');
    }
}
