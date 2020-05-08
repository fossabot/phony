<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class CurrencyTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function name_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->currency->name
        );
    }

    /** @test */
    public function code_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{3}/',
            $this->🙃->currency->code
        );
    }

    /** @test */
    public function symbol_attribute(): void
    {
        $this->assertIsString(
            $this->🙃->currency->symbol
        );
    }

    // endregion
}
