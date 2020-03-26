<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CurrencyTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->currency();
    }

    /** @test */
    public function name(): void
    {
        $this->assertIsString(
            $this->🧪->name()
        );
    }

    /** @test */
    public function code(): void
    {
        $this->assertRegExp(
            '/[A-Z]{3}/',
            $this->🧪->code()
        );
    }

    /** @test */
    public function symbol(): void
    {
        $this->assertIsString(
            $this->🧪->symbol()
        );
    }

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🧪->name);
        $this->assertNotNull($this->🧪->code);
        $this->assertNotNull($this->🧪->symbol);
    }
}
