<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class AncientTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function god_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->god
        );
    }

    /** @test */
    public function primordial_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->primordial
        );
    }

    /** @test */
    public function titan_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->titan
        );
    }

    /** @test */
    public function hero_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->ancient->hero
        );
    }

    // endregion
}
