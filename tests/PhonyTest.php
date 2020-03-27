<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\PhonyFacade;
use RuntimeException;

class PhonyTest extends BaseTest
{
    /** @test */
    public function can_call_through_laravel_facade(): void
    {
        $this->assertIsString(
 PhonyFacade::alphabet()->letter
        );
    }

    /** @test */
    public function can_not_access_undefined_magic_attribute(): void
    {
        $this->expectException(RuntimeException::class);

        $this->🙃->not_exist;
    }

    /** @test */
    public function can_not_set_a_magic_attribute(): void
    {
        $this->expectException(RuntimeException::class);

        $this->🙃->alphabet = 'can-not';
    }

    /** @test */
    public function can_check_existence_with_magic_isset(): void
    {
        $this->assertTrue(
            isset($this->🙃->alphabet)
        );

        $this->assertFalse(
            isset($this->🙃->not_exist)
        );
    }

    /** @test */
    public function can_call_by_an_alias(): void
    {
        $this->assertInstanceOf(Fake::class, $this->🙃->address);
        $this->assertInstanceOf(Fake::class, $this->🙃->📫);
        $this->assertInstanceOf(Fake::class, $this->🙃->alphabet);
        $this->assertInstanceOf(Fake::class, $this->🙃->🔤);
        $this->assertInstanceOf(Fake::class, $this->🙃->ancient);
        $this->assertInstanceOf(Fake::class, $this->🙃->📜);
        $this->assertInstanceOf(Fake::class, $this->🙃->person);
        $this->assertInstanceOf(Fake::class, $this->🙃->coin);
        $this->assertInstanceOf(Fake::class, $this->🙃->currency);
    }
}
