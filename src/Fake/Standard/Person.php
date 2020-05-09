<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;

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
        'name'              => ['person.name'],
        'name_with_middle'  => ['person.name_with_middle'],
        'first_name'        => ['person.first_name'],
        'middle_name'       => ['person.middle_name'],
        'male_first_name'   => ['person.male_first_name'],
        'female_first_name' => ['person.female_first_name'],
        'last_name'         => ['person.last_name'],
        'prefix'            => ['person.prefix'],
        'suffix'            => ['person.suffix'],
    ];

    protected array $methodsAsAttributes = [
        'initials' => [3],
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
