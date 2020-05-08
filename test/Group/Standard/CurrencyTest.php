<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class CurrencyTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function name(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->currency->name
        );
    }

    /** @test */
    public function code(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{3}/',
            $this->🙃->currency->code
        );
    }

    /** @test */
    public function symbol(): void
    {
        $this->assertIsString(
            $this->🙃->currency->symbol
        );
    }

    // endregion
}
