<?php

namespace Deligoez\Phony\Tests\Locales\Tr;

class CoinTrTest extends BaseTrTest
{
    /** @test */
    public function flip(): void
    {
        $this->assertIsString(
            $this->🙃->coin()->flip()
        );
    }
}
