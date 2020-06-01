<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

/**
 * Class Person.
 *
 *
 * @property-read string name
 * @property-read string name_with_middle
 * @property-read string first_name
 * @property-read string middle_name
 * @property-read string male_first_name
 * @property-read string female_first_name
 * @property-read string last_name
 * @property-read string prefix
 * @property-read string suffix
 * @property-read string initials
 */
class Person extends Fake
{
    protected array $attributes = [
        'name'              => ['standard.person.name'],
        'name_with_middle'  => ['standard.person.name_with_middle'],
        'first_name'        => ['standard.person.first_name'],
        'middle_name'       => ['standard.person.middle_name'],
        'male_first_name'   => ['standard.person.male_first_name'],
        'female_first_name' => ['standard.person.female_first_name'],
        'last_name'         => ['standard.person.last_name'],
        'prefix'            => ['standard.person.prefix'],
        'suffix'            => ['standard.person.suffix'],
    ];

    protected array $methodsAsAttributes = [
        'initials' => [],
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
                return $this->fetch('standard.person.initials');
            }
        );
    }
}
