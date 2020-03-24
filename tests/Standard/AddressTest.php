<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AddressTest extends BaseTest
{
    /** @test */
    public function city(): void
    {
        $this->assertIsString(
            $this->🙃->address()->city()
        );
    }

    /** @test */
    public function city_with_state(): void
    {
        $this->assertIsString(
            $this->🙃->address()->city(true)
        );
    }

    /** @test */
    public function street_name(): void
    {
        $this->assertIsString(
            $this->🙃->address()->streetName()
        );
    }
}
