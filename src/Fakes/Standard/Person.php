<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Person extends Fake
{
    /**
     * Produces a person name.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->name() #=> "Tyshawn Johns Sr."
     */
    public function name(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.name', $times, $asString, $glue);
    }

    /**
     * Produces a person name with middle name.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->nameWithMiddle() #=> "Aditya Elton Douglas"
     */
    public function nameWithMiddle(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.name_with_middle', $times, $asString, $glue);
    }

    /**
     * Produces a person first name.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->firstName() #=> "Kaci"
     */
    public function firstName(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.first_name', $times, $asString, $glue);
    }

    /**
     * Produces a person middle name.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->middleName() #=> "Abraham"
     */
    public function middleName(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.last_name', $times, $asString, $glue);
    }

    /**
     * Produces a male person first name.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->maleFirstName() #=> "Edward"
     */
    public function maleFirstName(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.male_first_name', $times, $asString, $glue);
    }

    /**
     * Produces a female person first name.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->femaleFirstName() #=> "Natasha"
     */
    public function femaleFirstName(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.female_first_name', $times, $asString, $glue);
    }

    /**
     * Produces a person last name.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->lastName() #=> "Ernser"
     */
    public function lastName(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.last_name', $times, $asString, $glue);
    }

    /**
     * Produces a person name prefix.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->prefix() #=> "Mr."
     */
    public function prefix(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.prefix', $times, $asString, $glue);
    }

    /**
     * Produces a person name suffix.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::person()->suffix() #=> "Mr."
     */
    public function suffix(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('person.suffix', $times, $asString, $glue);
    }

    /**
     * Produces a name initials.
     *
     * @param  int     $times
     *
     * @return array|string
     *
     * @example Phony::person()->initials() #=> "NJM."
     */
    public function initials(int $times = 3)
    {
        return $this->fetch('person.initials', $times, true, '');
    }
}
