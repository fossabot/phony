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
     * Fetches a value.
     *
     * @param  string  $key
     *
     * @return string
     */
    protected function fetch(string $key): string
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
            $values[$placeholders[0][$index]] = $this->fetch($placeholder);
        }

        return strtr($template, $values);
    }

    /**
     * Fetches multiple values given number of times.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     * @param          $callback
     *
     * @return array|string
     */
    protected function fetchMany(int $times, bool $asString, string $glue, $callback)
    {
        $values = [];

        foreach (range(1, $times) as $i) {
            $values[] = $callback();
        }

        return $asString
            ? implode($glue, $values)
            : $values;
    }

    /**
     * Replaces all hash sign ('#') occurrences with a random number and
     * all percentage sign ('%') occurrences with a not null number.
     *
     * @param  array|string  $numberString
     *
     * @return array|string
     * @throws \Exception
     */
    protected function numerify($numberString = '%%%###')
    {
        if (is_array($numberString))
        {
            foreach ($numberString as $index => $item) {
                $numberString[$index] = $this->numerify($item);
            }
        }

        $numberString = preg_replace_callback('/%/', fn() => random_int(1, 9), $numberString);
        $numberString = preg_replace_callback('/#/', fn() => random_int(0, 9), $numberString);

        return $numberString;
    }

    /**
     * Replaces all question mark ('?') occurrences with a random letter.
     *
     * @param  array|string  $letterString
     *
     * @return array|string
     * @throws \Exception
     */
    protected function letterify($letterString = '????')
    {
        if (is_array($letterString))
        {
            foreach ($letterString as $index => $item) {
                $letterString[$index] = $this->letterify($item);
            }
        }

        return preg_replace_callback(
            '/\?/',
            fn() => $this->fetch('alphabet.letter'),
            $letterString
        );
    }

    /**
     * Replaces hash signs ('#') and question marks ('?') with random numbers and letters.
     * An asterisk ('*') is replaced with either a random number or a random letter.
     *
     * @param  array|string  $string
     *
     * @return array|string
     * @throws \Exception
     */
    protected function bothify($string = '##??**')
    {
        if (is_array($string))
        {
            foreach ($string as $index => $item) {
                $string[$index] = $this->bothify($item);
            }
        }

        $string = $this->letterify($this->numerify($string));

        $string = preg_replace_callback(
            '/\*/',
            fn() => random_int(0, 1)
                ? $this->numerify('#')
                : $this->letterify('?'),
            $string
        );

        return $string;
    }
}
