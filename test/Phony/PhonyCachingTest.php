<?php

namespace Deligoez\Phony\Test\Phony;

use ReflectionMethod;
use Deligoez\Phony\Loader;
use Deligoez\Phony\Test\BaseTest;

class PhonyCachingTest extends BaseTest
{
    /** @test */
    public function can_get_cache_size(): void
    {
        $this->assertIsInt(
            $this->🙃->getCacheSize()
        );
    }

    /** @test */
    public function can_set_cache_size(): void
    {
        $this->🙃 = $this->🙃->setCacheSize(1_000_000);

        $this->assertEquals(
            1_000_000,
            $this->🙃->getCacheSize()
        );
    }

    /** @test */
    public function do_not_cache_if_size_exceed(): void
    {
        $this->🙃 = $this->🙃->setCacheSize(0);

        $this->🙃->alphabet->uppercase_letter;
        $this->🙃->alphabet->lowercase_letter;

        $this->assertEquals(
            0,
            $this->🙃->getCacheUsage()
        );
    }
}
