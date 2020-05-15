<?php

namespace Phony\Test\Group\Standard;

use Error;
use Phony\Test\BaseTest;

class NumberTest extends BaseTest
{
    /** @test */
    public function integerBetween_method_returns_an_integer(): void
    {
        $value = $this->🙃->number->integerBetween();

        $this->assertIsInt($value);
    }

    /** @test */
    public function integerBetween_method_returns_an_integer_between_min_and_max(): void
    {
        $value = $this->🙃->number->integerBetween(1, 100);

        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(100, $value);
    }

    /** @test */
    public function integerBetween_method_returns_error_if_min_greater_than_max(): void
    {
        $this->expectException(Error::class);

        $this->🙃->number->integerBetween(2, 1);
    }


    /** @test */
    public function integerWithin_method_returns_an_integer(): void
    {
        $value = $this->🙃->number->integerWithin();

        $this->assertIsInt($value);
    }

    /** @test */
    public function integerWithin_method_returns_an_integer_that_the_boundaries_not_included(): void
    {
        $value = $this->🙃->number->integerWithin(1, 100);

        $this->assertGreaterThanOrEqual(2, $value);
        $this->assertLessThanOrEqual(99, $value);
    }

    /** @test */
    public function integerWithin_method_returns_error_if_min_greater_than_max(): void
    {
        $this->expectException(Error::class);

        $this->🙃->number->integerWithin(2, 1);
    }

    /** @test */
    public function integerWithin_method_returns_error_if_min_and_max_are_same(): void
    {
        $this->expectException(Error::class);

        $this->🙃->number->integerWithin(1, 1);
    }


    /** @test */
    public function integerPositive_method_returns_an_integer(): void
    {
        $value = $this->🙃->number->integerPositive();

        $this->assertIsInt($value);
    }

    /** @test */
    public function integerPositive_method_returns_a_positive_integer(): void
    {
        $value = $this->🙃->number->integerPositive();

        $this->assertGreaterThanOrEqual(1, $value);
    }

    /** @test */
    public function integerPositive_method_returns_error_if_min_is_not_positive(): void
    {
        $this->expectException(Error::class);

        $this->🙃->number->integerPositive(-1);
    }

    /** @test */
    public function integerPositive_method_returns_error_if_min_is_zero(): void
    {
        $this->expectException(Error::class);

        $this->🙃->number->integerPositive(0);
    }


    /** @test */
    public function integerNegative_method_returns_an_integer(): void
    {
        $value = $this->🙃->number->integerNegative();

        $this->assertIsInt($value);
    }

    /** @test */
    public function integerNegative_method_returns_a_negative_integer(): void
    {
        $value = $this->🙃->number->integerNegative();

        $this->assertLessThanOrEqual(-1, $value);
    }

    /** @test */
    public function integerNegative_method_returns_error_if_max_is_not_negative(): void
    {
        $this->expectException(Error::class);

        $this->🙃->number->integerNegative(1);
    }

    /** @test */
    public function integerNegative_method_returns_error_if_max_is_zero(): void
    {
        $this->expectException(Error::class);

        $this->🙃->number->integerNegative(0);
    }


    /** @test */
    public function digit_method_returns_an_integer(): void
    {
        $value = $this->🙃->number->digit();

        $this->assertIsInt($value);
    }

    /** @test */
    public function digit_method_returns_a_digit(): void
    {
        $value = $this->🙃->number->digit();

        $this->assertGreaterThanOrEqual(0, $value);
        $this->assertLessThanOrEqual(9, $value);
    }

    /** @test */
    public function digit_method_returns_a_digit_for_the_given_base(): void
    {
        $valueBase2 = $this->🙃->number->digit(2);

        $this->assertGreaterThanOrEqual(0, $valueBase2);
        $this->assertLessThan(2, $valueBase2);

        $base = random_int(2, 99);
        $value = $this->🙃->number->digit($base);

        $this->assertGreaterThanOrEqual(0, $value);
        $this->assertLessThan($base, $value);
    }

    /** @test */
    public function digitNot_method_returns_a_digit_except_given_digit(): void
    {
        $value = $this->🙃->number->digitExcept(1, 2);
        $this->assertNotEquals(1, $value);

        $value = $this->🙃->number->digitExcept(0, 2);
        $this->assertNotEquals(0, $value);

        $value = $this->🙃->number->digitExcept(1, 2);
        $this->assertNotEquals(1, $value);
    }

    /** @test */
    public function digitNonZero_method_returns_a_digit_that_is_not_zero(): void
    {
        $value = $this->🙃->number->digitNonZero(2);
        $this->assertEquals(1, $value);

        $value = $this->🙃->number->digitNonZero();
        $this->assertNotEquals(0, $value);
    }
}
