<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class CosmereTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function aon(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->aon
        );
    }

    /** @test */
    public function shard_world(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->shard_world
        );
    }

    /** @test */
    public function shard(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->shard
        );
    }

    /** @test */
    public function surge(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->surge
        );
    }

    /** @test */
    public function knight_radiant(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->knight_radiant
        );
    }

    /** @test */
    public function metal(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->metal
        );
    }

    /** @test */
    public function allomancer(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->allomancer
        );
    }

    /** @test */
    public function feruchemist(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->feruchemist
        );
    }

    /** @test */
    public function herald(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->herald
        );
    }

    /** @test */
    public function spren(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->spren
        );
    }

    // endregion
}
