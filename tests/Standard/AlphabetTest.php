<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AlphabetTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->alphabet();
    }

    /** @test */
    public function uppercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->uppercaseLetter(), 'utf8')
        );
    }

    /** @test */
    public function lowercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->lowercaseLetter(), 'utf8')
        );
    }

    /** @test */
    public function letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->letter(), 'utf8')
        );
    }

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🧪->uppercaseLetter);
        $this->assertNotNull($this->🧪->lowercaseLetter);
        $this->assertNotNull($this->🧪->letter);
    }
}
