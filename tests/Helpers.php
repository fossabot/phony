<?php

use Phonyland\Phony;

function 🙃(string $locale = 'en'): Phony
{
    return new Phony($locale);
}

function regex(): \SRL\Builder
{
    return \SRL\SRL::unicode();
}

function assertRulesMatching(\SRL\Builder $rules, string $value)
{
    assertTrue($rules->isMatching($value));
}

function callPrivateFakeMethod($name, ...$args)
{
    return callPrivateMethod(🙃()->alphabet, $name, ...$args);
}

function callPrivateMethod($instance, $name, ...$args)
{
    $method = new ReflectionMethod($instance, $name);
    $method->setAccessible(true);

    return $method->invokeArgs($instance, $args);
}