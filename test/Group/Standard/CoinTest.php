<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class CoinTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function flip_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->coin->flip
        );
    }

    /** @test */
    public function name_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->coin->name
        );
    }

    // endregion
}
