<?php

namespace Phony\Test\Standard;

use Phony\Test\Locale\Tr\BaseTrTest;

class AlphabetTrTest extends BaseTrTest
{
    // region Attributes

    /** @test */
    public function uppercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->uppercase_letter, 'utf8')
        );
    }

    /** @test */
    public function lowercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->lowercase_letter, 'utf8')
        );
    }

    /** @test */
    public function letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet->letter, 'utf8')
        );
    }

    // endregion
}
