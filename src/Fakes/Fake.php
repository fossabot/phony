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
        // Retrieve element by the given $key
        $template = Arr::random(
            trans("phony::{$key}", $replace, $this->phony->defaultLocale)
        );

        // Check if it's an actual fake data or a template
        if (! Str::contains($template, ':')) {
            // It's a fake data, so return it immediately.
            return $template;
        }

        // Extract placeholders in the template
        $placeholders = array_map(
            'trim',
            array_filter(explode(':', $template))
        );

        $values = [];

        // Fetch placeholder values recursively
        foreach ($placeholders as $placeholder) {
            $values[$placeholder] = $this->fetchOne($placeholder, $replace);
        }

        // Replace placeholders by their values
        foreach ($values as $name => $value) {
            $template = Str::of($template)->replaceFirst(':'.$name, $value);
        }

        return $template;
    }
}
