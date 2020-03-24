<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AncientTest extends BaseTest
{
    /** @test */
    public function god(): void
    {
        $this->assertIsString(
            $this->🙃->ancient()->god()
        );
    }

    /** @test */
    public function primordial(): void
    {
        $this->assertIsString(
            $this->🙃->ancient()->primordial()
        );
    }

    /** @test */
    public function titan(): void
    {
        $this->assertIsString(
            $this->🙃->ancient()->titan()
        );
    }

    /** @test */
    public function hero(): void
    {
        $this->assertIsString(
            $this->🙃->ancient()->hero()
        );
    }
}
