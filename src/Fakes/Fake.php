<?php

namespace Deligoez\Phony\Fakes;

use Deligoez\Phony\Phony;
use Illuminate\Support\Arr;

class Fake
{
    protected Phony $phony;

    public function __construct(Phony $phony)
    {
        $this->phony = $phony;
    }

    public function fetchOne(string $path, array $replace = []): string
    {
        return Arr::random(
            trans("phony::{$path}", $replace, $this->phony->defaultLocale)
        );
    }
}
