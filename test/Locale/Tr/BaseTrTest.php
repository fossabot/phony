<?php

namespace PhonyPHP\Phony\Test\Locale\Tr;

use PhonyPHP\Phony\Locale;
use PhonyPHP\Phony\Phony;
use PhonyPHP\Phony\Test\BaseTest;

abstract class BaseTrTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony(Locale::tr);
    }
}
