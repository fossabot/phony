<?php

namespace Deligoez\Phony\Fakes;

use Deligoez\Phony\Phony;

class Fake
{
    protected Phony $phony;

    /**
     * Fake constructor.
     *
     * @param  \Deligoez\Phony\Phony  $phony
     */
    public function __construct(Phony $phony)
    {
        $this->phony = $phony;
    }

    /**
     * Helper for the common approach of grabbing a translation
     * with an array of values and selecting one of them.
     *
     * @param  string  $key
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     */
    protected function fetch(string $key, int $times, bool $asString, string $glue)
    {
        return $times === 1
            ? $this->fetchOne($key)
            : $this->fetchMany($key, $times, $asString, $glue);
    }

    /**
     * Extracts placeholders from the given template.
     *
     * @param  string  $template
     *
     * @return array
     */
    private function extractPlaceholders(string $template): array
    {
        preg_match_all('/🙃(.*?)🙃/u', $template, $placeholders);

        return $placeholders;
    }

    /**
     * Fetches a value.
     *
     * @param  string  $key
     *
     * @return string
     */
    private function fetchOne(string $key): string
    {
        $template = trans("phony::{$key}", [], $this->phony->defaultLocale);

        if (is_array($template)) {
            $template = $template[array_rand($template, 1)];
        }

        // Check if it's an actual fake data or a template
        if (strpos($template, '🙃') === false) {
            // It's a fake data, so return it immediately.
            return $template;
        }

        // Extract placeholders in the template
        $placeholders = $this->extractPlaceholders($template);

        $values = [];

        // Fetch placeholder values recursively
        foreach ($placeholders[1] as $index => $placeholder) {
            $values[$placeholders[0][$index]] = $this->fetchOne($placeholder);
        }

        return strtr($template, $values);
    }

    /**
     * Fetches multiple values given number of times.
     *
     * @param  string  $key
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     */
    private function fetchMany(string $key, int $times, bool $asString, string $glue)
    {
        $values = [];

        foreach (range(1, $times) as $i) {
            $values[] = $this->fetchOne($key);
        }

        return $asString
            ? implode($glue, $values)
            : $values;
    }
}
