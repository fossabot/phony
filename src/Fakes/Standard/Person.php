<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Person.
 *
 *
 * @property string name
 * @property string name_with_middle
 * @property string first_name
 * @property string middle_name
 * @property string male_first_name
 * @property string female_first_name
 * @property string last_name
 * @property string prefix
 * @property string suffix
 * @property string initials
 */
class Person extends Fake
{
    /**
     * Produces a person name.
     *
     * @return string
     *
     * @example 🙃::person()->name() // => "Tyshawn Johns Sr."
     */
    protected function name(): string
    {
        return $this->fetch('person.name');
    }

    /**
     * Produces a person name with middle name.
     *
     * @return string
     *
     * @example 🙃::person()->name_with_middle() // => "Aditya Elton Douglas"
     */
    protected function name_with_middle(): string
    {
        return $this->fetch('person.name_with_middle');
    }

    /**
     * Produces a person first name.
     *
     * @return string
     *
     * @example 🙃::person()->first_name() // => "Kaci"
     */
    protected function first_name(): string
    {
        return $this->fetch('person.first_name');
    }

    /**
     * Produces a person middle name.
     *
     * @return string
     *
     * @example 🙃::person()->middle_name() // => "Abraham"
     */
    protected function middle_name(): string
    {
        return $this->fetch('person.middle_name');
    }

    /**
     * Produces a male person first name.
     *
     * @return string
     *
     * @example 🙃::person()->male_first_name() // => "Edward"
     */
    protected function male_first_name(): string
    {
        return $this->fetch('person.male_first_name');
    }

    /**
     * Produces a female person first name.
     *
     * @return string
     *
     * @example 🙃::person()->female_first_name() // => "Natasha"
     */
    protected function female_first_name(): string
    {
        return $this->fetch('person.female_first_name');
    }

    /**
     * Produces a person last name.
     *
     * @return string
     *
     * @example 🙃::person()->last_name() // => "Ernser"
     */
    protected function last_name(): string
    {
        return $this->fetch('person.last_name');
    }

    /**
     * Produces a person name prefix.
     *
     * @return string
     *
     * @example 🙃::person()->prefix() // => "Mr."
     */
    protected function prefix(): string
    {
        return $this->fetch('person.prefix');
    }

    /**
     * Produces a person name suffix.
     *
     * @return string
     *
     * @example 🙃::person()->suffix() // => "Mr."
     */
    protected function suffix(): string
    {
        return $this->fetch('person.suffix');
    }

    /**
     * Produces a name initials.
     *
     * @param  int  $count
     *
     * @return string
     *
     * @example 🙃::person()->initials() // => "NJM."
     * @example 🙃::person()->initials(4) // => "NJMA."
     */
    public function initials(int $count = 3): string
    {
        return $this->fetchMany(
            $count,
            true,
            '',
            function () {
                return $this->fetch('person.initials');
            }
        );
    }
}
