<?php

namespace Deligoez\Phony\Test\Locale\Tr;

use Deligoez\Phony\Phony;
use Deligoez\Phony\Test\BaseTest;

abstract class BaseTrTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony('tr');
    }
}
