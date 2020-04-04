<?php

namespace Deligoez\Phony\Test\Standard;

use Deligoez\Phony\Test\BaseTest;

class AlphabetTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->alphabet;
    }

    // region Attributes

    /** @test */
    public function uppercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->uppercase_letter, 'utf8')
        );
    }

    /** @test */
    public function lowercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->lowercase_letter, 'utf8')
        );
    }

    /** @test */
    public function letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->letter, 'utf8')
        );
    }

    // endregion
}
