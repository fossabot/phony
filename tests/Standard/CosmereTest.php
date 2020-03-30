<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

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
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->aon
        );
    }

    /** @test */
    public function shard_world(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->shard_world
        );
    }

    /** @test */
    public function shard(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->shard
        );
    }

    /** @test */
    public function surge(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->surge
        );
    }

    /** @test */
    public function knight_radiant(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->knight_radiant
        );
    }

    /** @test */
    public function metal(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->metal
        );
    }

    /** @test */
    public function allomancer(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->allomancer
        );
    }

    /** @test */
    public function feruchemist(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->feruchemist
        );
    }

    /** @test */
    public function herald(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->herald
        );
    }

    /** @test */
    public function spren(): void
    {
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->spren
        );
    }

    // endregion
}
