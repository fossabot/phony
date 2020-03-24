<?php

namespace Deligoez\Phony\Tests;

use ReflectionMethod;
use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\PhonyFacade;

class FakeTest extends BaseTest
{
    protected $numerify;

    protected function setUp(): void
    {
        parent::setUp();

        $this->numerify = new ReflectionMethod(Fake::class, 'numerify');
        $this->numerify->setAccessible(true);
    }

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

    /** @test */
    public function can_numerify_with_hash_sign(): void
    {
        $this->assertIsInt(
            (int) $this->numerify->invoke(new Fake($this->🙃), '###')
        );
    }

    /** @test */
    public function can_numerify_with_percentage_sign(): void
    {
        $this->assertIsInt(
            (int) $this->numerify->invoke(new Fake($this->🙃), '%%%')
        );
    }
}
