<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class AlphabetTest extends BaseTest
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
