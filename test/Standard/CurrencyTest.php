<?php

namespace Deligoez\Phony\Test\Standard;

use Deligoez\Phony\Test\BaseTest;

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
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->name
        );
    }

    /** @test */
    public function code(): void
    {
        $this->assertMatchesRegularExpression(
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
