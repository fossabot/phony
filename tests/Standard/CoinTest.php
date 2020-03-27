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

    /** @test */
    public function flip(): void
    {
        $this->assertIsString(
            $this->🧪->flip
        );
    }

    /** @test */
    public function name(): void
    {
        $this->assertIsString(
            $this->🧪->name
        );
    }
}
