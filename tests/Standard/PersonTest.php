<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class PersonTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->person();
    }

    /** @test */
    public function name(): void
    {
        $this->assertIsString(
            $this->🧪->name()
        );
    }

    /** @test */
    public function name_with_middle(): void
    {
        $this->assertIsString(
            $this->🧪->nameWithMiddle()
        );
    }

    /** @test */
    public function first_name(): void
    {
        $this->assertIsString(
            $this->🧪->firstName()
        );
    }

    /** @test */
    public function middle_name(): void
    {
        $this->assertIsString(
            $this->🧪->middleName()
        );
    }

    /** @test */
    public function male_first_name(): void
    {
        $this->assertIsString(
            $this->🧪->maleFirstName()
        );
    }

    /** @test */
    public function female_first_name(): void
    {
        $this->assertIsString(
            $this->🧪->femaleFirstName()
        );
    }

    /** @test */
    public function last_name(): void
    {
        $this->assertIsString(
            $this->🧪->lastName()
        );
    }

    /** @test */
    public function suffix(): void
    {
        $this->assertIsString(
            $this->🧪->suffix()
        );
    }

    /** @test */
    public function prefix(): void
    {
        $this->assertIsString(
            $this->🧪->prefix()
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

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🧪->name);
        $this->assertNotNull($this->🧪->nameWithMiddle);
        $this->assertNotNull($this->🧪->firstName);
        $this->assertNotNull($this->🧪->middleName);
        $this->assertNotNull($this->🧪->maleFirstName);
        $this->assertNotNull($this->🧪->femaleFirstName);
        $this->assertNotNull($this->🧪->lastName);
        $this->assertNotNull($this->🧪->prefix);
        $this->assertNotNull($this->🧪->suffix);
        $this->assertNotNull($this->🧪->initials);
    }
}
