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

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🙃->currency()->name);
        $this->assertNotNull($this->🙃->currency()->code);
        $this->assertNotNull($this->🙃->currency()->symbol);
    }
}
