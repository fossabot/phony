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

    // region Attributes

    /** @test */
    public function name(): void
    {
        $this->assertRegExp(
            '/(\w+\.? ?){2,3}/',
            $this->🧪->name
        );
    }

    /** @test */
    public function name_with_middle(): void
    {
        $this->assertRegExp(
            '/(\w+\.? ?){3,4}/',
            $this->🧪->name_with_middle
        );
    }

    /** @test */
    public function first_name(): void
    {
        $this->assertRegExp(
            '/(\w+\.? ?){3,4}/',
            $this->🧪->first_name
        );
    }

    /** @test */
    public function middle_name(): void
    {
        $this->assertRegExp(
            '/(\w+\.? ?){3,4}/',
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
        $this->assertRegExp(
            '/(\w+\.? ?){3,4}/',
            $this->🧪->last_name
        );
    }

    /** @test */
    public function prefix(): void
    {
        $this->assertRegExp(
            '/[A-Z][a-z]+\.?/',
            $this->🧪->prefix
        );
    }

    /** @test */
    public function suffix(): void
    {
        $this->assertRegExp(
            '/[A-Z][a-z]*\.?/',
            $this->🧪->suffix
        );
    }

    // endregion

    // region Functions

    /** @test */
    public function initials_with_default_lenght(): void
    {
        $this->assertEquals(
            3,
            mb_strlen($this->🧪->initials(), 'utf8')
        );
    }

    /** @test
     * @throws \Exception
     */
    public function initials_with_given_lenght(): void
    {
        $this->assertEquals(
            $times = random_int(2, 10),
            mb_strlen($this->🧪->initials($times), 'utf8')
        );
    }

    // endregion
}
