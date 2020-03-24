<?php

namespace Deligoez\Phony\Tests;

use ReflectionMethod;
use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\PhonyFacade;

class FakeTest extends BaseTest
{
    protected $numerify;
    protected $fetch;

    protected function setUp(): void
    {
        parent::setUp();

        $this->numerify = new ReflectionMethod(Fake::class, 'numerify');
        $this->numerify->setAccessible(true);

        $this->fetch = new ReflectionMethod(Fake::class, 'fetch');
        $this->fetch->setAccessible(true);
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
            $this->fetch->invoke(new Fake($this->🙃), 'alphabet.uppercase_letter', 1, true, '')
          );
    }

    /** @test */
    public function can_fetch_many_values(): void
    {
        $times = random_int(2, 10);

        $this->assertCount(
            $times,
            $this->fetch->invoke(new Fake($this->🙃), 'alphabet.uppercase_letter', $times, false, '')
        );
    }

    /** @test */
    public function can_fetch_many_values_as_a_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->fetch->invoke(new Fake($this->🙃), 'alphabet.uppercase_letter', $times, true, ' ');

        $this->assertEquals(
            $times - 1,
            substr_count($value, ' ')
        );
    }

    /** @test */
    public function can_fetch_many_values_as_glued_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->fetch->invoke(new Fake($this->🙃), 'alphabet.uppercase_letter', $times, true, '🙃');

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
