<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class ArtistTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->artist;
    }

    // region Attributes

    /** @test */
    public function name(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->name
        );
    }

    // endregion
}
