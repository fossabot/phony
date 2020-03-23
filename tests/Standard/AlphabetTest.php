<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AlphabetTest extends BaseTest
{
    public function test_uppercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet()->uppercaseLetter(), 'utf8')
        );
    }

    public function test_lowercase_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet()->lowercaseLetter(), 'utf8')
        );
    }

    public function test_letter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🙃->alphabet()->letter(), 'utf8')
        );
    }
}
