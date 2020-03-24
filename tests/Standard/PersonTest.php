<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class PersonTest extends BaseTest
{
    /** @test */
    public function name(): void
    {
        $this->assertIsString(
            $this->🙃->person()->name()
        );
    }

    /** @test */
    public function name_with_middle(): void
    {
        $this->assertIsString(
            $this->🙃->person()->nameWithMiddle()
        );
    }

    /** @test */
    public function first_name(): void
    {
        $this->assertIsString(
            $this->🙃->person()->firstName()
        );
    }

    /** @test */
    public function middle_name(): void
    {
        $this->assertIsString(
            $this->🙃->person()->middleName()
        );
    }

    /** @test */
    public function male_first_name(): void
    {
        $this->assertIsString(
            $this->🙃->person()->maleFirstName()
        );
    }

    /** @test */
    public function female_first_name(): void
    {
        $this->assertIsString(
            $this->🙃->person()->femaleFirstName()
        );
    }

    /** @test */
    public function last_name(): void
    {
        $this->assertIsString(
            $this->🙃->person()->lastName()
        );
    }

    /** @test */
    public function suffix(): void
    {
        $this->assertIsString(
            $this->🙃->person()->suffix()
        );
    }

    /** @test */
    public function prefix(): void
    {
        $this->assertIsString(
            $this->🙃->person()->prefix()
        );
    }

    /** @test */
    public function initials_with_default_lenght(): void
    {
        $this->assertEquals(
            3,
            mb_strlen($this->🙃->person()->initials(), 'utf8')
        );
    }

    /** @test */
    public function initials_with_given_lenght(): void
    {
        $this->assertEquals(
            $times = random_int(2, 10),
            mb_strlen($this->🙃->person()->initials($times), 'utf8')
        );
    }
}
