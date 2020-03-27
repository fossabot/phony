<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AlphabetTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->alphabet;
    }

    /** @test */
    public function uppercaseLetter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->uppercaseLetter, 'utf8')
        );
    }

    /** @test */
    public function lowercaseLetter(): void
    {
        $this->assertEquals(
            1,
            mb_strlen($this->🧪->lowercaseLetter, 'utf8')
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
}
