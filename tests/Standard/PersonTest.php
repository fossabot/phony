<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class PersonTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->person;
    }

    /** @test */
    public function name(): void
    {
        $this->assertIsString(
            $this->🧪->name
        );
    }

    /** @test */
    public function name_with_middle(): void
    {
        $this->assertIsString(
            $this->🧪->name_with_middle
        );
    }

    /** @test */
    public function first_name(): void
    {
        $this->assertIsString(
            $this->🧪->first_name
        );
    }

    /** @test */
    public function middle_name(): void
    {
        $this->assertIsString(
            $this->🧪->middle_name
        );
    }

    /** @test */
    public function male_first_name(): void
    {
        $this->assertIsString(
            $this->🧪->male_first_name
        );
    }

    /** @test */
    public function female_first_name(): void
    {
        $this->assertIsString(
            $this->🧪->female_first_name
        );
    }

    /** @test */
    public function last_name(): void
    {
        $this->assertIsString(
            $this->🧪->last_name
        );
    }

    /** @test */
    public function prefix(): void
    {
        $this->assertIsString(
            $this->🧪->prefix
        );
    }

    /** @test */
    public function suffix(): void
    {
        $this->assertIsString(
            $this->🧪->suffix
        );
    }

    /** @test */
    public function initials_with_default_lenght(): void
    {
        $this->assertEquals(
            3,
            mb_strlen($this->🧪->initials(), 'utf8')
        );
    }

    /** @test */
    public function initials_with_given_lenght(): void
    {
        $this->assertEquals(
            $times = random_int(2, 10),
            mb_strlen($this->🧪->initials($times), 'utf8')
        );
    }
}
