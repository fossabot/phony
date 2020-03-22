<?php

namespace Deligoez\Phony;

use Deligoez\Phony\Fakes\Standard\Coin;
use Deligoez\Phony\Fakes\Standard\Currency;

class Phony
{
    public string $defaultLocale;

    /**
     * Phony constructor.
     *
     * @param  string  $defaultLocale
     */
    public function __construct(string $defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function coin(): Coin
    {
        return new Coin($this);
    }

    public function currency(): Currency
    {
        return new Currency($this);
    }
}
