<?php

namespace Phonyland\Fake;

use Phonyland\Phony;
use RuntimeException;

/**
 * Class Fake.
 */
abstract class Fake
{
    protected Phony $phony;
    protected array $attributes;
    protected array $methodsAsAttributes;
    protected array $methodAliases;

    /**
     * Fake constructor.
     *
     * @param  \Phonyland\Phony  $phony
     */
    public function __construct(Phony $phony)
    {
        $this->phony = $phony;
    }

    // region Magic Setup

    /**
     * Gets a magic attribute.
     *
     * @param $attribute
     *
     * @return mixed
     * @throws \Exception
     */
    public function __get($attribute)
    {
        if (isset($this->attributes[$attribute])) {
            $value = $this->fetch($this->attributes[$attribute][0]);

            if (isset($this->attributes[$attribute][1])) {
                $functions = explode('|', $this->attributes[$attribute][1]);

                foreach ($functions as $fn) {
                    $value = $this->$fn($value);
                }
            }

            return $value;
        }

        if (isset($this->methodAliases[$attribute])) {
            return $this->{$this->methodAliases[$attribute]}();
        }

        if (isset($this->methodsAsAttributes[$attribute])) {
            return $this->{$attribute}(...$this->methodsAsAttributes[$attribute]);
        }

        throw new RuntimeException("The {$attribute} attribute is not defined!");
    }

    /**
     * Setting a magic attribute is not allowed.
     *
     * @param $attribute
     * @param $value
     */
    public function __set($attribute, $value)
    {
        throw new RuntimeException("Setting {$attribute} attribute is not allowed!");
    }

    /**
     * Checks if a magic attribute exists.
     *
     * @param $attribute
     *
     * @return bool
     */
    public function __isset($attribute)
    {
        if (isset($this->attributes[$attribute])) {
            return true;
        }

        return false;
    }

    /**
     * Gets a magic function.
     *
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (isset($this->methodAliases[$name])) {
            return $this->{$this->methodAliases[$name]}(...$arguments);
        }

        throw new RuntimeException("The {$name} function is not defined!");
    }

    // endregion

    // region Fetching

    /**
     * Fetches a value.
     *
     * @param  string       $key
     *
     * @param  string|null  $path
     *
     * @return string
     */
    protected function fetch(string $key, string $path = null): string
    {
        // TODO: Try to remove $path -> see if it brokes something --> this is the path inside file
        $template = $this->phony->loader->get($key, $path, $this->phony->defaultLocale);

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

    // endregion

    // region Numerifications

    /**
     * Replaces every hash sign ('#') with a random digit and percentage
     * sign ('%') with a random digit that is not null.
     *
     * @param  array|string  $numberString
     *
     * @return array|string
     */
    protected function numerify($numberString = '%%%###')
    {
        if (is_array($numberString)) {
            foreach ($numberString as $index => $item) {
                $numberString[$index] = $this->numerify($item);
            }
        }

        $numberString = preg_replace_callback('/%/', fn () => $this->phony->number->digitNonZero(), $numberString);
        $numberString = preg_replace_callback('/#/', fn () => $this->phony->number->digit(), $numberString);

        return $numberString;
    }

    /**
     * Replaces every question mark ('?') with a random hex digit.
     *
     * @param  array|string  $letterString
     *
     * @return array|string
     */
    protected function hexify($letterString = '####')
    {
        if (is_array($letterString)) {
            foreach ($letterString as $index => $item) {
                $letterString[$index] = $this->hexify($item);
            }
        }

        return preg_replace_callback(
            '/#/',
            fn () => $this->phony->number->hexadecimal(),
            $letterString
        );
    }

    /**
     * Replaces every question mark ('?') with a random letter.
     *
     * @param  array|string  $letterString
     *
     * @return array|string
     */
    protected function letterify($letterString = '????')
    {
        if (is_array($letterString)) {
            foreach ($letterString as $index => $item) {
                $letterString[$index] = $this->letterify($item);
            }
        }

        return preg_replace_callback(
            '/\?/',
            fn () => $this->fetch('standard.alphabet.letter'),
            $letterString
        );
    }

    /**
     * Replaces every hash ('#') and question sign ('?') with a random number and letter.
     * An asterisk sign ('*') is replaced by a random number or a random letter.
     *
     * @param  array|string  $string
     *
     * @return array|string
     */
    protected function bothify($string = '##??**')
    {
        if (is_array($string)) {
            foreach ($string as $index => $item) {
                $string[$index] = $this->bothify($item);
            }
        }

        $string = $this->letterify($this->numerify($string));

        $string = preg_replace_callback(
            '/\*/',
            fn () => random_int(0, 1)
                ? $this->numerify('#')
                : $this->letterify('?'),
            $string
        );

        return $string;
    }

    // endregion
}
