<?php

namespace Phonyland\Test\Phony;

use Phonyland\Fake\Fake;
use Phonyland\Test\BaseTest;

class PhonyTest extends BaseTest
{
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
