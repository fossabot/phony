<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Alphabet
 *
 * @package Deligoez\Phony\Fakes\Standard
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
     * @example 🙃::alphabet()->uppercaseLetter() #=> "P"
     */
    public function uppercaseLetter(): string
    {
        return $this->fetch('alphabet.uppercase_letter');
    }

    /**
     * Retrieves a lowercase letter.
     *
     * @return string
     *
     * @example 🙃::alphabet()->lowercaseLetter() #=> "P"
     */
    public function lowercaseLetter(): string
    {
        return $this->fetch('alphabet.lowercase_letter');
    }

    /**
     * Retrieves a letter.
     *
     * @return string
     *
     * @example 🙃::alphabet()->letter() #=> "P"
     */
    public function letter(): string
    {
        return $this->fetch('alphabet.letter');
    }
}
