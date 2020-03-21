<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CoinTest extends BaseTest
{
    public function test_flip(): void
    {
        $a = $this->phony->coin()->flip();
        dd($a);
        $this->assertRegExp(
            '/\w+/',
            $a
        );
    }
}
