<?php

namespace Deligoez\Phony\Test;

use Deligoez\Phony\Phony;
use Deligoez\Phony\Locale;
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
