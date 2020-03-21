<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CoinTest extends BaseTest
{
    public function test_flip(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->phony->coin()->flip()
        );
    }

    public function test_name(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->phony->coin()->name()
        );
    }
}
