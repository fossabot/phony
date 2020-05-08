<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class CosmereTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function aon_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->aon
        );
    }

    /** @test */
    public function shard_world_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->shard_world
        );
    }

    /** @test */
    public function shard_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->shard
        );
    }

    /** @test */
    public function surge_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->surge
        );
    }

    /** @test */
    public function knight_radiant_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->knight_radiant
        );
    }

    /** @test */
    public function metal_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->metal
        );
    }

    /** @test */
    public function allomancer_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->allomancer
        );
    }

    /** @test */
    public function feruchemist_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->feruchemist
        );
    }

    /** @test */
    public function herald_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->herald
        );
    }

    /** @test */
    public function spren_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->cosmere->spren
        );
    }

    // endregion
}
