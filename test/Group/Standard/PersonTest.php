<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class PersonTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function name(): void
    {
        $this->assertMatchesRegularExpression(
            '/(\w+\.? ?){2,3}/',
            $this->🙃->person->name
        );
    }

    /** @test */
    public function name_with_middle(): void
    {
        $this->assertMatchesRegularExpression(
            '/(\w+\.? ?){3,4}/',
            $this->🙃->person->name_with_middle
        );
    }

    /** @test */
    public function first_name(): void
    {
        $this->assertMatchesRegularExpression(
            '/(\w+\.? ?){3,4}/',
            $this->🙃->person->first_name
        );
    }

    /** @test */
    public function middle_name(): void
    {
        $this->assertMatchesRegularExpression(
            '/(\w+\.? ?){3,4}/',
            $this->🙃->person->middle_name
        );
    }

    /** @test */
    public function male_first_name(): void
    {
        $this->assertIsString(
            $this->🙃->person->male_first_name
        );
    }

    /** @test */
    public function female_first_name(): void
    {
        $this->assertIsString(
            $this->🙃->person->female_first_name
        );
    }

    /** @test */
    public function last_name(): void
    {
        $this->assertMatchesRegularExpression(
            '/(\w+\.? ?){3,4}/',
            $this->🙃->person->last_name
        );
    }

    /** @test */
    public function prefix(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z][a-z]+\.?/',
            $this->🙃->person->prefix
        );
    }

    /** @test */
    public function suffix(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z][a-z]*\.?/',
            $this->🙃->person->suffix
        );
    }

    // endregion

    // region Functions

    /** @test */
    public function initials_with_default_length(): void
    {
        $this->assertEquals(
            3,
            strlen($this->🙃->person->initials())
        );
    }

    /** @test
     * @throws \Exception
     */
    public function initials_with_given_length(): void
    {
        $this->assertEquals(
            $times = random_int(2, 10),
            strlen($this->🙃->person->initials($times))
        );
    }

    // endregion
}
