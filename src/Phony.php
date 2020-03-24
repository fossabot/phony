<?php

namespace Deligoez\Phony;

use Deligoez\Phony\Fakes\Standard\Address;
use Deligoez\Phony\Fakes\Standard\Alphabet;
use Deligoez\Phony\Fakes\Standard\Ancient;
use Deligoez\Phony\Fakes\Standard\Coin;
use Deligoez\Phony\Fakes\Standard\Currency;
use Deligoez\Phony\Fakes\Standard\Person;

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

    public function address(): Address
    {
        return new Address($this);
    }

    public function alphabet(): Alphabet
    {
        return new Alphabet($this);
    }

    public function ancient(): Ancient
    {
        return new Ancient($this);
    }

    public function person(): Person
    {
        return new Person($this);
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
