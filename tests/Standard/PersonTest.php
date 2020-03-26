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

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🙃->person()->name);
        $this->assertNotNull($this->🙃->person()->nameWithMiddle);
        $this->assertNotNull($this->🙃->person()->firstName);
        $this->assertNotNull($this->🙃->person()->middleName);
        $this->assertNotNull($this->🙃->person()->maleFirstName);
        $this->assertNotNull($this->🙃->person()->femaleFirstName);
        $this->assertNotNull($this->🙃->person()->lastName);
        $this->assertNotNull($this->🙃->person()->prefix);
        $this->assertNotNull($this->🙃->person()->suffix);
        $this->assertNotNull($this->🙃->person()->initials);
    }
}
