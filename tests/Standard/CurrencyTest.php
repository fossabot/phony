<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CurrencyTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->currency;
    }

    // region Attributes

    /** @test */
    public function name(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->name
        );
    }

    /** @test */
    public function code(): void
    {
        $this->assertRegExp(
            '/[A-Z]{3}/',
            $this->🧪->code
        );
    }

    /** @test */
    public function symbol(): void
    {
        $this->assertIsString(
            $this->🧪->symbol
        );
    }

    // endregion
}
