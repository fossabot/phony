<?php

namespace PhonyPHP\Phony;

class Group
{
    public const default = [
        'address'     => \PhonyPHP\Phony\Fake\Standard\Address::class,
        '📫'          => \PhonyPHP\Phony\Fake\Standard\Address::class,
        'alphabet'    => \PhonyPHP\Phony\Fake\Standard\Alphabet::class,
        '🔤'          => \PhonyPHP\Phony\Fake\Standard\Alphabet::class,
        'ancient'     => \PhonyPHP\Phony\Fake\Standard\Ancient::class,
        '📜'          => \PhonyPHP\Phony\Fake\Standard\Ancient::class,
        'artist'      => \PhonyPHP\Phony\Fake\Standard\Artist::class,
        'coin'        => \PhonyPHP\Phony\Fake\Standard\Coin::class,
        'cosmere'     => \PhonyPHP\Phony\Fake\Standard\Cosmere::class,
        'currency'    => \PhonyPHP\Phony\Fake\Standard\Currency::class,
        'person'      => \PhonyPHP\Phony\Fake\Standard\Person::class,
        'slack_emoji' => \PhonyPHP\Phony\Fake\Standard\SlackEmoji::class,
    ];
}
