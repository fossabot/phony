<?php

namespace Phonyland\Fake\ProgrammingLanguage;

use Phonyland\Fake\Fake;

/**
 * Class Php.
 *
 *
 * @property-read string extension
 * @property-read string hello_world
 */
class Php extends Fake
{
    protected array $attributes = [
        'extension'   => ['programming_language.php.extension'],
        'hello_world' => ['programming_language.php.hello_world'],
    ];
}
