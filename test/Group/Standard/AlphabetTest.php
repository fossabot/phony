<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class AlphabetTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function uppercase_letter_attribute(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->uppercase_letter, 'utf8')
        );
    }

    /** @test */
    public function lowercase_letter_attribute(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->lowercase_letter, 'utf8')
        );
    }

    /** @test */
    public function letter_attribute(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->letter, 'utf8')
        );
    }

    /** @test */
    public function punctuation_mark_attribute(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->punctuation_mark, 'utf8')
        );
    }

    // endregion

    // region Methods

    /** @test */
    public function ascii_uppercase_letter_method(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->ascii_uppercase_letter(), 'utf8')
        );
    }

    /** @test */
    public function ascii_lowercase_letter_method(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->ascii_lowercase_letter(), 'utf8')
        );
    }

    /** @test */
    public function ascii_letter_method(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->ascii_letter(), 'utf8')
        );
    }

    // endregion

    // region Methods as Attributes

    /** @test */
    public function ascii_uppercase_letter_method_as_attribute(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->ascii_uppercase_letter, 'utf8')
        );
    }

    /** @test */
    public function ascii_lowercase_letter_method_as_attribute(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->ascii_lowercase_letter, 'utf8')
        );
    }

    /** @test */
    public function ascii_letter_method_as_attribute(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->ascii_letter, 'utf8')
        );
    }

    // endregion
}
