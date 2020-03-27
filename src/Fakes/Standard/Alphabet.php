<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Alphabet.
 *
 *
 * @property string uppercaseLetter
 * @property string lowercaseLetter
 * @property string letter
 */
class Alphabet extends Fake
{
    /**
     * Retrieves an uppercase letter.
     *
     * @return string
     *
     * @example 🙃::alphabet()->uppercaseLetter() // => "P"
     */
    protected function uppercaseLetter(): string
    {
        return $this->fetch('alphabet.uppercase_letter');
    }

    /**
     * Retrieves a lowercase letter.
     *
     * @return string
     *
     * @example 🙃::alphabet()->lowercaseLetter() // => "P"
     */
    protected function lowercaseLetter(): string
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
