<?php

namespace Deligoez\Phony;

use Illuminate\Support\Arr;
use Deligoez\Phony\Fakes\Standard\Coin;

class Phony
{
    protected string $defaultLocale;

    public function __construct(string $defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function coin(): Coin
    {
        return new Coin($this->defaultLocale);
    }

    public function fetchOne(string $path, array $replace = []): string
    {
        return Arr::random(
            trans("phony::{$path}", $replace, $this->defaultLocale)
        );
    }
}
