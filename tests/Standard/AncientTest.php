<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AncientTest extends BaseTest
{
    public function test_god(): void
    {
        $this->assertIsString(
            $this->phony->ancient()->god()
        );
    }

    public function test_primordial(): void
    {
        $this->assertIsString(
            $this->phony->ancient()->primordial()
        );
    }

    public function test_titan(): void
    {
        $this->assertIsString(
            $this->phony->ancient()->titan()
        );
    }

    public function test_hero(): void
    {
        $this->assertIsString(
            $this->phony->ancient()->hero()
        );
    }
}
