<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\Phony;
use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    protected Phony $🙃;
    protected Fake $🧪;

    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony('en');
    }
}
