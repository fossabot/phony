<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AddressTest extends BaseTest
{
    public function test_city(): void
    {
        $this->assertIsString(
            $this->phony->address()->city()
        );
    }
}
