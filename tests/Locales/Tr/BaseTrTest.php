<?php

namespace Deligoez\Phony\Tests\Locales\Tr;

use Deligoez\Phony\Phony;
use Deligoez\Phony\Tests\BaseTest;

abstract class BaseTrTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony('tr');
    }
}
