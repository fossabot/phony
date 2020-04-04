<?php

namespace Deligoez\Phony\Test\Standard;

use Deligoez\Phony\Test\BaseTest;

class CosmereTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->cosmere;
    }

    // region Attributes

    /** @test */
    public function aon(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->aon
        );
    }

    /** @test */
    public function shard_world(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->shard_world
        );
    }

    /** @test */
    public function shard(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->shard
        );
    }

    /** @test */
    public function surge(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->surge
        );
    }

    /** @test */
    public function knight_radiant(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->knight_radiant
        );
    }

    /** @test */
    public function metal(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->metal
        );
    }

    /** @test */
    public function allomancer(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->allomancer
        );
    }

    /** @test */
    public function feruchemist(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->feruchemist
        );
    }

    /** @test */
    public function herald(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->herald
        );
    }

    /** @test */
    public function spren(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->spren
        );
    }

    // endregion
}
