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

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🙃->ancient()->god);
        $this->assertNotNull($this->🙃->ancient()->primordial);
        $this->assertNotNull($this->🙃->ancient()->titan);
        $this->assertNotNull($this->🙃->ancient()->hero);
    }
}
