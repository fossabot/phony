<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Person extends Fake
{
    /**
     * Produces a person name.
     *
     * @return string
     *
     * @example Phony::person()->name() #=> "Tyshawn Johns Sr."
     */
    public function name(): string
    {
        return $this->fetchOne('person.name');
    }

    /**
     * Produces a person name with middle name.
     *
     * @return string
     *
     * @example Phony::person()->nameWithMiddle() #=> "Aditya Elton Douglas"
     */
    public function nameWithMiddle(): string
    {
        return $this->fetchOne('person.name_with_middle');
    }

    /**
     * Produces a person first name.
     *
     * @return string
     *
     * @example Phony::person()->firstName() #=> "Kaci"
     */
    public function firstName(): string
    {
        return $this->fetchOne('person.first_name');
    }

    /**
     * Produces a person middle name.
     *
     * @return string
     *
     * @example Phony::person()->middleName() #=> "Abraham"
     */
    public function middleName(): string
    {
        return $this->fetchOne('person.last_name');
    }

    /**
     * Produces a male person first name.
     *
     * @return string
     *
     * @example Phony::person()->maleFirstName() #=> "Edward"
     */
    public function maleFirstName(): string
    {
        return $this->fetchOne('person.male_first_name');
    }

    /**
     * Produces a female person first name.
     *
     * @return string
     *
     * @example Phony::person()->femaleFirstName() #=> "Natasha"
     */
    public function femaleFirstName(): string
    {
        return $this->fetchOne('person.female_first_name');
    }

    /**
     * Produces a person last name.
     *
     * @return string
     *
     * @example Phony::person()->lastName() #=> "Ernser"
     */
    public function lastName(): string
    {
        return $this->fetchOne('person.last_name');
    }

    /**
     * Produces a person name prefix.
     *
     * @return string
     *
     * @example Phony::person()->prefix() #=> "Mr."
     */
    public function prefix(): string
    {
        return $this->fetchOne('person.prefix');
    }

    /**
     * Produces a person name suffix.
     *
     * @return string
     *
     * @example Phony::person()->suffix() #=> "Mr."
     */
    public function suffix(): string
    {
        return $this->fetchOne('person.suffix');
    }
}
