<?php

namespace Deligoez\Phony\Tests\Locales\Tr;

class PersonTrTest extends BaseTrTest
{
    /** @test */
    public function initials_with_default_length(): void
    {
        $this->assertEquals(
            6,
            mb_strlen($this->🙃->person->initials(), 'utf8')
        );
    }

    /** @test
     * @throws \Exception
     */
    public function initials_with_given_length(): void
    {
        $times = random_int(2, 10);

        $this->assertEquals(
            $times * 2,
            mb_strlen($this->🙃->person->initials($times), 'utf8')
        );
    }
}
