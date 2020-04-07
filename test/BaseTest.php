<?php

namespace Phony\Test;

use Phony\Locale;
use Phony\Phony;
use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    protected Phony $🙃;
    protected $🧪;

    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony(Locale::en);
    }
}
