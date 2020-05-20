<?php

namespace Phonyland\Test\Locale\Tr;

use Phonyland\Locale;
use Phonyland\Phony;
use Phonyland\Test\BaseTest;

abstract class BaseTrTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony(Locale::tr);
    }
}
