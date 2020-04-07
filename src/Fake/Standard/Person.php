<?php

namespace PhonyPHP\Phony\Fake\Standard;

use PhonyPHP\Phony\Fake\Fake;

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
    protected array $attributes = [
        'name'              => ['person.name'],
        'name_with_middle'  => ['person.name_with_middle'],
        'first_name'         => ['person.first_name'],
        'middle_name'       => ['person.middle_name'],
        'male_first_name'    => ['person.male_first_name'],
        'female_first_name'  => ['person.female_first_name'],
        'last_name'         => ['person.last_name'],
        'prefix'             => ['person.prefix'],
        'suffix'             => ['person.suffix'],
    ];

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
