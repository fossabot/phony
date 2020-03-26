<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AlphabetTest extends BaseTest
{
    /** @test */
    public function uppercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet()->uppercaseLetter(), 'utf8')
        );
    }

    /** @test */
    public function lowercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet()->lowercaseLetter(), 'utf8')
        );
    }

    /** @test */
    public function letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet()->letter(), 'utf8')
        );
    }

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🙃->alphabet()->uppercaseLetter);
        $this->assertNotNull($this->🙃->alphabet()->lowercaseLetter);
        $this->assertNotNull($this->🙃->alphabet()->letter);
    }
}
