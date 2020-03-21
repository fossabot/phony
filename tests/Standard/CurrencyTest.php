<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CurrencyTest extends BaseTest
{
    public function test_name(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->phony->currency()->name()
        );
    }

    public function test_code(): void
    {
        $this->assertRegExp(
            '/[A-Z]{3}/',
            $this->phony->currency()->code()
        );
    }

    public function test_symbol(): void
    {
        $this->assertIsString(
            $this->phony->currency()->symbol()
        );
    }
}
