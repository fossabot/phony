<?php

namespace Phonyland\Group;

/**
 * Class ProgrammingLanguage.
 *
 *
 * @property-read \Phonyland\Fake\ProgrammingLanguage\Php php
 */
class ProgrammingLanguage extends Group
{
    public array $fakes = [
        'php' => \Phonyland\Fake\ProgrammingLanguage\Php::class,
    ];
}
