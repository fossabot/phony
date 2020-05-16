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
    public function integerNormal_method_returns_an_integer(): void
    {
        $value = $this->🙃->number->integerNormal();

        $this->assertIsInt($value);
    }

    /** @test */
    public function integerNormal_method_calculates_integers_with_standard_deviation(): void
    {
        $n = 10000;

        $values = [];
        foreach (range(1, 10000) as $k => $i) {
            $values[] = $this->🙃->number->integerNormal(150, 100);
        }

        $mean = array_sum($values) / (float) $n;

        $variance = array_reduce($values, function ($variance, $item) use ($mean) {
                return $variance += ($item - $mean) ** 2;
            }, 0) / (float) ($n - 1);

        $std_dev = sqrt($variance);

        $this->assertEqualsWithDelta(150, $mean, 5);
        $this->assertEqualsWithDelta(100, $std_dev, 3);
    }


    /** @test */
    public function integerDigit_method_returns_an_integer(): void
    {
        $value = $this->🙃->number->integerDigit();

        $this->assertIsInt($value);
    }

    /** @test */
    public function integerDigit_method_returns_an_integer_with_the_given_number_of_digits(): void
    {
        $digits = random_int(1, 15);
        $value = $this->🙃->number->integerDigit($digits);

        $this->assertLessThanOrEqual($digits, strlen((string) abs($value)));
    }

    /** @test */
    public function integerDigit_method_returns_an_integer_with_exactly_the_given_number_of_digits(): void
    {
        $digits = random_int(1, 15);
        $value = $this->🙃->number->integerDigit($digits, true);

        $this->assertEquals($digits, strlen((string) abs($value)));
    }

    /** @test */
    public function integerDigit_method_returns_an_positive_or_negative_integers(): void
    {
        $value = $this->🙃->number->integerDigit(1, true, true);
        $this->assertGreaterThan(0, $value);

        $value = $this->🙃->number->integerDigit(1, true, false);
        $this->assertLessThan(0, $value);
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
