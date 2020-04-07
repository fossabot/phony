<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class CoinTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->coin;
    }

    // region Attributes

    /** @test */
    public function flip(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->flip
        );
    }

    /** @test */
    public function name(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->name
        );
    }

    // endregion
}
