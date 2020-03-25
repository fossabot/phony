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

        // Pick one if it's an array
        if (is_array($template)) {
            $template = $template[array_rand($template, 1)];
        }

        // Check if it's an actual fake data or a template
        if (strpos($template, '🙃') === false) {
            // It's a fake data, so return it immediately.
            return $template;
        }

        // Extract placeholders in the template
        $placeholders = [];
        preg_match_all('/🙃(.*?)🙃/u', $template, $placeholders);

        // Fetch placeholder values recursively
        $values = [];
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

    /**
     * Replaces all hash sign ('#') occurrences with a random number and
     * all percentage sign ('%') occurrences with a not null number.
     *
     * @param  string  $numberString
     *
     * @return string
     * @throws \Exception
     */
    protected function numerify(string $numberString = '%%%###'): string
    {
        $numberString = preg_replace_callback('/%/', fn() => random_int(1, 9), $numberString);
        $numberString = preg_replace_callback('/#/', fn() => random_int(0, 9), $numberString);

        return $numberString;
    }

    /**
     * Replaces all question mark ('?') occurrences with a random letter.
     *
     * @param  string  $numberString
     *
     * @return string
     * @throws \Exception
     */
    protected function letterify(string $numberString = '????'): string
    {
        return preg_replace_callback(
            '/\?/',
            fn() => $this->fetch('alphabet.letter', 1, true, ''),
            $numberString
        );
    }

    /**
     * Replaces hash signs ('#') and question marks ('?') with random numbers and letters.
     * An asterisk ('*') is replaced with either a random number or a random letter.
     *
     * @param  string  $numberString
     *
     * @return string
     * @throws \Exception
     */
    protected function bothify(string $numberString = '##??**'): string
    {
        $numberString = $this->letterify($this->numerify($numberString));

        $numberString = preg_replace_callback(
            '/\*/',
            fn() => random_int(0, 1)
                ? $this->numerify('#')
                : $this->letterify('?'),
            $numberString
        );

        return $numberString;
    }
}
