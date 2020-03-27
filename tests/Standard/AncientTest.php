<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AncientTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->ancient;
    }

    /** @test */
    public function god(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->god
        );
    }

    /** @test */
    public function primordial(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->primordial
        );
    }

    /** @test */
    public function titan(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->titan
        );
    }

    /** @test */
    public function hero(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->hero
        );
    }
}
