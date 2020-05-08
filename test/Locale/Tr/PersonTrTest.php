<?php

namespace Phony\Test\Standard;

use Phony\Test\Locale\Tr\BaseTrTest;

class PersonTrTest extends BaseTrTest
{
    // region Attributes

    /** @test */
    public function male_first_name_attribute(): void
    {
        $this->assertIsString(
            $this->🙃->person->male_first_name
        );
    }

    /** @test */
    public function female_first_name_attribute(): void
    {
        $this->assertIsString(
            $this->🙃->person->female_first_name
        );
    }

    /** @test */
    public function last_name_attribute(): void
    {
        $this->assertTrue(
            mb_ereg_match(
                '(\w+\.? ?){3,4}',
                $this->🙃->person->last_name
            )
    );
    }

    // endregion

    // region Methods

    /** @test */
    public function initials_method_with_default_length(): void
    {
        $this->assertEquals(
            6,
            mb_strlen($this->🙃->person->initials(), 'utf-8')
        );
    }

    /** @test */
    public function initials_method_with_given_length(): void
    {
        $times = random_int(2, 10);

        $this->assertEquals(
            $times * 2,
            mb_strlen($this->🙃->person->initials($times), 'utf-8')
        );
    }

    // endregion
}
