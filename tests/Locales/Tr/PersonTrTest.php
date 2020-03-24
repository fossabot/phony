<?php

namespace Deligoez\Phony\Tests\Locales\Tr;

class PersonTrTest extends BaseTrTest
{
    /** @test */
    public function initials(): void
    {
        $this->markTestSkipped();

        $this->assertEquals(
            3,
            mb_strlen($this->🙃->person()->initials(), 'utf8')
        );

        $this->assertEquals(
            $times = random_int(2, 10),
            mb_strlen($this->🙃->person()->initials($times), 'utf8')
        );
    }
}
