<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CurrencyTest extends BaseTest
{
    public function test_name(): void
    {
        $this->assertIsString(
            $this->🙃->currency()->name()
        );
    }

    public function test_code(): void
    {
        $this->assertRegExp(
            '/[A-Z]{3}/',
            $this->🙃->currency()->code()
        );
    }

    public function test_symbol(): void
    {
        $this->assertIsString(
            $this->🙃->currency()->symbol()
        );
    }
}
