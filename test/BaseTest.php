<?php

namespace Phony\Test;

use Phony\Locale;
use Phony\Phony;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

abstract class BaseTest extends TestCase
{
    protected Phony $🙃;

    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony(Locale::en);
    }

    protected function callFakeMethod($name, ...$args)
    {
        $method = new ReflectionMethod($this->🙃->alphabet, $name);
        $method->setAccessible(true);

        return $method->invokeArgs($this->🙃->alphabet, $args);
    }
}
