<?php

namespace Phony\Test\Phony;

use Phony\Test\BaseTest;

class FakeOperationTest extends BaseTest
{
    /** @test */
    public function can_numerify_with_hash_sign(): void
    {
        $value = (int) $this->callFakeMethod('numerify', '###');

        $this->assertMatchesRegularExpression('/^[\d]{0,3}$/', $value);
    }

    /** @test */
    public function can_hexify_with_hash_sign(): void
    {
        $value = $this->callFakeMethod('hexify', '###');

        $this->assertMatchesRegularExpression('/^[a-z0-9]{3}$/', $value);
    }

    /** @test */
    public function can_hexify_arrays(): void
    {
        $testArray = [
            '#',
            '##',
            '###',
        ];

        $result = $this->callFakeMethod('hexify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[a-z0-9]{1,3}$/', $item);
        }
    }

    /** @test */
    public function can_numerify_with_percentage_sign(): void
    {
        $value = (int) $this->callFakeMethod('numerify', '%%%');

        $this->assertMatchesRegularExpression('/^[\d]{3}$/', $value);
    }

    /** @test */
    public function can_numerify_arrays(): void
    {
        $testArray = [
            '##',
            '%%',
            '#%',
        ];

        $result = $this->callFakeMethod('numerify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[\d]{1,2}$/', (int) $item);
        }
    }

    /** @test */
    public function can_letterify(): void
    {
        $value = $this->callFakeMethod('letterify', '???');

        $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
    }

    /** @test */
    public function can_letterify_arrays(): void
    {
        $testArray = [
            '?',
            '??',
            '???',
        ];

        $result = $this->callFakeMethod('letterify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[A-Za-z]{1,3}$/', $item);
        }
    }

    /** @test */
    public function can_bothify(): void
    {
        $value = $this->callFakeMethod('bothify', '?#%');

        $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
    }

    /** @test */
    public function can_bothify_with_asterix(): void
    {
        $value = $this->callFakeMethod('bothify', '***');

        $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
    }

    /** @test */
    public function can_bothify_arrays(): void
    {
        $testArray = [
            '#',
            '?',
            '*',
            '**',
            '#?*',
        ];

        $result = $this->callFakeMethod('bothify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[\w]{1,3}$/', $item);
        }
    }
}
