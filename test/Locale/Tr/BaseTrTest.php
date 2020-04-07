<?php

namespace Phony\Test\Locale\Tr;

use Phony\Locale;
use Phony\Phony;
use Phony\Test\BaseTest;

abstract class BaseTrTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony(Locale::tr);
    }
}
