<?php

namespace Phony\Test\Locale\Tr;

class CoinTrTest extends BaseTrTest
{
    // region Attributes

    /** @test */
    public function flip_attribute(): void
    {
        $this->assertIsString(
            $this->🙃->coin->flip
        );
    }

    // endregion
}
