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
        $characters = str_split($numberString);

        for ($i = 0; isset($characters[$i]); $i++) {
            if ($characters[$i] === '#') {
                $characters[$i] = random_int(0, 9);
                continue;
            }

            if ($characters[$i] === '%') {
                $characters[$i] = random_int(1, 9);
                continue;
            }
        }

        return implode('', $characters);
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
        $characters = str_split($numberString);

        for ($i = 0; isset($characters[$i]); $i++) {
            if ($characters[$i] === '?') {
                $characters[$i] = $this->fetch('alphabet.letter', 1, true, '');
                continue;
            }
        }

        return implode('', $characters);
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
        // TODO: Adjust for *
        return $this->letterify($this->numerify($numberString));
    }
}
