<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AncientTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->ancient();
    }

    /** @test */
    public function god(): void
    {
        $this->assertIsString(
            $this->🧪->god()
        );
    }

    /** @test */
    public function primordial(): void
    {
        $this->assertIsString(
            $this->🧪->primordial()
        );
    }

    /** @test */
    public function titan(): void
    {
        $this->assertIsString(
            $this->🧪->titan()
        );
    }

    /** @test */
    public function hero(): void
    {
        $this->assertIsString(
            $this->🧪->hero()
        );
    }

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🧪->god);
        $this->assertNotNull($this->🧪->primordial);
        $this->assertNotNull($this->🧪->titan);
        $this->assertNotNull($this->🧪->hero);
    }
}
