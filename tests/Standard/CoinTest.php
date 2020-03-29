<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

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
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->flip
        );
    }

    /** @test */
    public function name(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->name
        );
    }

    // endregion
}
