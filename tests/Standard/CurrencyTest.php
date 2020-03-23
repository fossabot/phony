<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CurrencyTest extends BaseTest
{
        /** @test */
    public function name(): void
    {
        $this->assertIsString(
            $this->🙃->currency()->name()
        );
    }

        /** @test */
    public function code(): void
    {
        $this->assertRegExp(
            '/[A-Z]{3}/',
            $this->🙃->currency()->code()
        );
    }

        /** @test */
    public function symbol(): void
    {
        $this->assertIsString(
            $this->🙃->currency()->symbol()
        );
    }
}
