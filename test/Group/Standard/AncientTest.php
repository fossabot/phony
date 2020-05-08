<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class AncientTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function god(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->god
        );
    }

    /** @test */
    public function primordial(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->primordial
        );
    }

    /** @test */
    public function titan(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->titan
        );
    }

    /** @test */
    public function hero(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->hero
        );
    }

    // endregion
}
