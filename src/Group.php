<?php

namespace Phony;

class Group
{
    public const default = [
        'address'     => \Phony\Fake\Standard\Address::class,
        '📫'          => \Phony\Fake\Standard\Address::class,
        'alphabet'    => \Phony\Fake\Standard\Alphabet::class,
        '🔤'          => \Phony\Fake\Standard\Alphabet::class,
        'ancient'     => \Phony\Fake\Standard\Ancient::class,
        '📜'          => \Phony\Fake\Standard\Ancient::class,
        'artist'      => \Phony\Fake\Standard\Artist::class,
        'boolean'     => \Phony\Fake\Standard\Boolean::class,
        'coin'        => \Phony\Fake\Standard\Coin::class,
        'cosmere'     => \Phony\Fake\Standard\Cosmere::class,
        'currency'    => \Phony\Fake\Standard\Currency::class,
        'number'      => \Phony\Fake\Standard\Number::class,
        'person'      => \Phony\Fake\Standard\Person::class,
        'slack_emoji' => \Phony\Fake\Standard\SlackEmoji::class,
    ];
}
