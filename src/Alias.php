<?php

namespace Deligoez\Phony;

class Alias
{
    public const default = [
        'address'     => \Deligoez\Phony\Fakes\Standard\Address::class,
        '📫'          => \Deligoez\Phony\Fakes\Standard\Address::class,
        'alphabet'    => \Deligoez\Phony\Fakes\Standard\Alphabet::class,
        '🔤'          => \Deligoez\Phony\Fakes\Standard\Alphabet::class,
        'ancient'     => \Deligoez\Phony\Fakes\Standard\Ancient::class,
        '📜'          => \Deligoez\Phony\Fakes\Standard\Ancient::class,
        'artist'      => \Deligoez\Phony\Fakes\Standard\Artist::class,
        'coin'        => \Deligoez\Phony\Fakes\Standard\Coin::class,
        'cosmere'     => \Deligoez\Phony\Fakes\Standard\Cosmere::class,
        'currency'    => \Deligoez\Phony\Fakes\Standard\Currency::class,
        'person'      => \Deligoez\Phony\Fakes\Standard\Person::class,
        'slack_emoji' => \Deligoez\Phony\Fakes\Standard\SlackEmoji::class,
    ];
}