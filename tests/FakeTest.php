<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\PhonyFacade;

class FakeTest extends BaseTest
{
    /** @test */
    public function can_call_through_laravel_facade(): void
    {
        $this->assertIsString(
/** @scrutinizer ignore-call */ PhonyFacade::alphabet()->letter()
        );
    }

    /** @test */
    public function can_fetch_a_value(): void
    {
        $this->assertNotNull(
              $this->🙃->alphabet()->uppercaseLetter()
          );
    }

    /** @test */
    public function can_fetch_many_values(): void
    {
        $times = random_int(2, 10);

        $this->assertCount(
            $times,
/** @scrutinizer ignore-type */ $this->🙃->alphabet()->uppercaseLetter($times, false)
        );
    }

    /** @test */
    public function can_fetch_many_values_as_a_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->🙃->alphabet()->uppercaseLetter($times, true);

        $this->assertEquals(
            $times - 1,
            substr_count($value, ' ')
        );
    }

    /** @test */
    public function can_fetch_many_values_as_glued_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->🙃->alphabet()->uppercaseLetter($times, true, '🙃');

        $this->assertEquals(
            $times - 1,
            substr_count($value, '🙃')
        );
    }
}
