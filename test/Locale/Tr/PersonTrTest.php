<?php

namespace Deligoez\Phony\Test\Standard;

use Deligoez\Phony\Test\Locale\Tr\BaseTrTest;

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
}
