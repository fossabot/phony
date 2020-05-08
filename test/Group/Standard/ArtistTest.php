<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class ArtistTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function name_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->artist->name
        );
    }

    // endregion
}
