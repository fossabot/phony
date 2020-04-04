<?php

namespace Deligoez\Phony;

class Alias
{
    public const default = [
        'address'     => \Deligoez\Phony\Fake\Standard\Address::class,
        '📫'          => \Deligoez\Phony\Fake\Standard\Address::class,
        'alphabet'    => \Deligoez\Phony\Fake\Standard\Alphabet::class,
        '🔤'          => \Deligoez\Phony\Fake\Standard\Alphabet::class,
        'ancient'     => \Deligoez\Phony\Fake\Standard\Ancient::class,
        '📜'          => \Deligoez\Phony\Fake\Standard\Ancient::class,
        'artist'      => \Deligoez\Phony\Fake\Standard\Artist::class,
        'coin'        => \Deligoez\Phony\Fake\Standard\Coin::class,
        'cosmere'     => \Deligoez\Phony\Fake\Standard\Cosmere::class,
        'currency'    => \Deligoez\Phony\Fake\Standard\Currency::class,
        'person'      => \Deligoez\Phony\Fake\Standard\Person::class,
        'slack_emoji' => \Deligoez\Phony\Fake\Standard\SlackEmoji::class,
    ];
}
