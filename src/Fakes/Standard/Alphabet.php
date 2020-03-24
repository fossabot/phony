<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Alphabet extends Fake
{
    /**
     * Retrieves an uppercase letter.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example 🙃::alphabet()->uppercaseLetter() #=> "P"
     */
    public function uppercaseLetter(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('alphabet.uppercase_letter', $times, $asString, $glue);
    }

    /**
     * Retrieves a lowercase letter.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example 🙃::alphabet()->lowercaseLetter() #=> "P"
     */
    public function lowercaseLetter(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('alphabet.lowercase_letter', $times, $asString, $glue);
    }

    /**
     * Retrieves a letter.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example 🙃::alphabet()->letter() #=> "P"
     */
    public function letter(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('alphabet.letter', $times, $asString, $glue);
    }
}
