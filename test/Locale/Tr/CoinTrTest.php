<?php

namespace Deligoez\Phony\Test\Locale\Tr;

class CoinTrTest extends BaseTrTest
{
    /** @test */
    public function flip(): void
    {
        $this->assertIsString(
            $this->🙃->coin->flip
        );
    }
}
