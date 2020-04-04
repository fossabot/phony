<?php

namespace Deligoez\Phony\Test\Standard;

use Deligoez\Phony\Test\BaseTest;

class AncientTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->ancient;
    }

    // region Attributes

    /** @test */
    public function god(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->god
        );
    }

    /** @test */
    public function primordial(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->primordial
        );
    }

    /** @test */
    public function titan(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->titan
        );
    }

    /** @test */
    public function hero(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->hero
        );
    }

    // endregion
}
