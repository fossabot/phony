<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\Fakes\Fake;
use ReflectionMethod;
use RuntimeException;

class FakeTest extends BaseTest
{
    protected ReflectionMethod $fetch;
    protected ReflectionMethod $fetchMany;
    protected ReflectionMethod $numerify;
    protected ReflectionMethod $letterify;
    protected ReflectionMethod $bothify;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fetch = new ReflectionMethod(Fake::class, 'fetch');
        $this->fetch->setAccessible(true);

        $this->fetchMany = new ReflectionMethod(Fake::class, 'fetchMany');
        $this->fetchMany->setAccessible(true);

        $this->numerify = new ReflectionMethod(Fake::class, 'numerify');
        $this->numerify->setAccessible(true);

        $this->letterify = new ReflectionMethod(Fake::class, 'letterify');
        $this->letterify->setAccessible(true);

        $this->bothify = new ReflectionMethod(Fake::class, 'bothify');
        $this->bothify->setAccessible(true);
    }

    /** @test */
    public function can_not_access_undefined_magic_attribute(): void
    {
        $this->expectException(RuntimeException::class);

        $this->🙃->alphabet->not_exist;
    }

    /** @test */
    public function can_not_set_a_magic_attribute(): void
    {
        $this->expectException(RuntimeException::class);

        $this->🙃->alphabet()->uppercase_letter = 'can-not';
    }

    /** @test */
    public function can_check_existence_with_magic_isset(): void
    {
        $this->assertTrue(
            isset($this->🙃->alphabet()->uppercase_letter)
        );

        $this->assertFalse(
            isset($this->🙃->alphabet->not_exist)
        );
    }

    /** @test */
    public function can_not_access_undefined_magic_method(): void
    {
        $this->expectException(RuntimeException::class);

        $this->🙃->alphabet->not_exist();
    }

    /** @test */
    public function can_fetch_a_value(): void
    {
        $this->assertNotNull(
            $this->fetch->invoke(new Fake($this->🙃), 'alphabet.uppercase_letter')
          );
    }

    /** @test */
    public function can_fetch_many_values(): void
    {
        $this->assertCount(
            $times = random_int(2, 10),
            $this->fetchMany->invoke(new Fake($this->🙃), $times, false, '', static function () {
                return 'value';
            })
        );
    }

    /** @test */
    public function can_fetch_many_values_as_a_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->fetchMany->invoke(new Fake($this->🙃), $times, true, ' ', static function () {
            return 'value';
        });

        $this->assertEquals(
            $times - 1,
            substr_count($value, ' ')
        );
    }

    /** @test */
    public function can_fetch_many_values_as_glued_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->fetchMany->invoke(new Fake($this->🙃), $times, true, '🙃', static function () {
            return 'value';
        });

        $this->assertEquals(
            $times - 1,
            substr_count($value, '🙃')
        );
    }

    /** @test */
    public function can_numerify_with_hash_sign(): void
    {
        $this->assertRegExp(
            '/^[\d]{0,3}$/',
            (int) $this->numerify->invoke(new Fake($this->🙃), '###')
        );
    }

    /** @test */
    public function can_numerify_with_percentage_sign(): void
    {
        $this->assertRegExp(
            '/^[\d]{3}$/',
            (int) $this->numerify->invoke(new Fake($this->🙃), '%%%')
        );
    }

    /** @test */
    public function can_numerify_arrays(): void
    {
        // TODO: Check with regex
        $testArray = [
            '##',
            '%%',
            '#%',
        ];

        $result = $this->numerify->invoke(new Fake($this->🙃), $testArray);

        foreach ($result as $item) {
            $this->assertRegExp(
                '/^[\d]{1,2}$/',
                (int) $item
            );
        }
    }

    /** @test */
    public function can_letterify(): void
    {
        $this->assertRegExp(
            '/^[\w]{3}$/',
            $this->letterify->invoke(new Fake($this->🙃), '???')
        );
    }

    /** @test */
    public function can_letterify_arrays(): void
    {
        $testArray = [
            '?',
            '??',
            '???',
        ];

        $result = $this->letterify->invoke(new Fake($this->🙃), $testArray);

        foreach ($result as $item) {
            $this->assertRegExp(
                '/^[A-Za-z]{1,3}$/',
                $item
            );
        }
    }

    /** @test */
    public function can_bothify(): void
    {
        $this->assertRegExp(
            '/^[\w]{3}$/',
            $this->bothify->invoke(new Fake($this->🙃), '?#%')
        );
    }

    /** @test */
    public function can_bothify_with_asterix(): void
    {
        $this->assertRegExp(
            '/^[\w]{3}$/',
            $this->bothify->invoke(new Fake($this->🙃), '***')
        );
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

        $result = $this->bothify->invoke(new Fake($this->🙃), $testArray);

        foreach ($result as $item) {
            $this->assertRegExp(
                '/^[\w]{1,3}$/',
                $item
            );
        }
    }
}
