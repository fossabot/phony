<?php

namespace Deligoez\Phony\Fakes;

use Deligoez\Phony\Phony;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Fake
{
    protected Phony $phony;

    public function __construct(Phony $phony)
    {
        $this->phony = $phony;
    }

    /**
     * Helper for the common approach of grabbing a translation
     * with an array of values and selecting one of them.
     *
     * @param  string  $key
     * @param  array   $replace
     *
     * @return string
     */
    public function fetchOne(string $key, array $replace = []): string
    {
        return Arr::random(
            trans("phony::{$key}", $replace, $this->phony->defaultLocale)
        );
    }
}
