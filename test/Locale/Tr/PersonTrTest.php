<?php

namespace PhonyPHP\Phony\Test\Standard;

use PhonyPHP\Phony\Test\Locale\Tr\BaseTrTest;

class PersonTrTest extends BaseTrTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->person;
    }

    // region Attributes

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
        $this->assertMatchesRegularExpression(
            '/(\w+\.? ?){3,4}/',
            $this->🧪->last_name
        );
    }

    // endregion

    // region Functions

    /** @test */
    public function initials_with_default_length(): void
    {
        $this->assertEquals(
            6,
            mb_strlen($this->🧪->initials(), 'utf-8')
        );
    }

    /** @test
     * @throws \Exception
     */
    public function initials_with_given_length(): void
    {
        $times = random_int(2, 10);

        $this->assertEquals(
            $times * 2,
            mb_strlen($this->🧪->initials($times), 'utf-8')
        );
    }

    // endregion
}
