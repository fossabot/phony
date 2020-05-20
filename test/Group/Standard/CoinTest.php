<?php

namespace Phonyland\Test\Group\Standard;

use Phonyland\Test\BaseTest;

class CoinTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function flip_attribute(): void
    {
        $value = $this->🙃->coin->flip;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function name_attribute(): void
    {
        $value = $this->🙃->coin->name;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    // endregion
}
