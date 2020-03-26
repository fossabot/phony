<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class CoinTest extends BaseTest
{
    /** @test */
    public function flip(): void
    {
        $this->assertIsString(
            $this->🙃->coin()->flip()
        );
    }

    /** @test */
    public function name(): void
    {
        $this->assertIsString(
            $this->🙃->coin()->name()
        );
    }

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🙃->coin()->flip);
        $this->assertNotNull($this->🙃->coin()->name);
    }
}
