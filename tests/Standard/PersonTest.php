<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class PersonTest extends BaseTest
{
    public function test_name(): void
    {
        $this->assertIsString(
            $this->phony->person()->name()
        );
    }

    public function test_name_with_middle(): void
    {
        $this->assertIsString(
            $this->phony->person()->nameWithMiddle()
        );
    }

    public function test_first_name(): void
    {
        $this->assertIsString(
            $this->phony->person()->firstName()
        );
    }

    public function test_middle_name(): void
    {
        $this->assertIsString(
            $this->phony->person()->middleName()
        );
    }

    public function test_male_first_name(): void
    {
        $this->assertIsString(
            $this->phony->person()->maleFirstName()
        );
    }

    public function test_female_first_name(): void
    {
        $this->assertIsString(
            $this->phony->person()->femaleFirstName()
        );
    }

    public function test_last_name(): void
    {
        $this->assertIsString(
            $this->phony->person()->lastName()
        );
    }

    public function test_suffix(): void
    {
        $this->assertIsString(
            $this->phony->person()->suffix()
        );
    }

    public function test_prefix(): void
    {
        $this->assertIsString(
            $this->phony->person()->prefix()
        );
    }
}
