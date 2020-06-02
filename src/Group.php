<?php

namespace Phonyland;

class Group
{
    public const All = [
        'standard'             => self::Standard,
        'programming_language' => self::ProgrammingLanguage,
    ];

    public const Standard = [
        'address'     => \Phonyland\Fake\Standard\Address::class,
        '📫'          => \Phonyland\Fake\Standard\Address::class,
        'alphabet'    => \Phonyland\Fake\Standard\Alphabet::class,
        '🔤'          => \Phonyland\Fake\Standard\Alphabet::class,
        'ancient'     => \Phonyland\Fake\Standard\Ancient::class,
        '📜'          => \Phonyland\Fake\Standard\Ancient::class,
        'artist'      => \Phonyland\Fake\Standard\Artist::class,
        'boolean'     => \Phonyland\Fake\Standard\Boolean::class,
        'coin'        => \Phonyland\Fake\Standard\Coin::class,
        'cosmere'     => \Phonyland\Fake\Standard\Cosmere::class,
        'currency'    => \Phonyland\Fake\Standard\Currency::class,
        'number'      => \Phonyland\Fake\Standard\Number::class,
        'person'      => \Phonyland\Fake\Standard\Person::class,
        'slack_emoji' => \Phonyland\Fake\Standard\SlackEmoji::class,
    ];

    public const ProgrammingLanguage = [
        'php' => \Phonyland\Fake\ProgrammingLanguage\Php::class,
    ];
}
