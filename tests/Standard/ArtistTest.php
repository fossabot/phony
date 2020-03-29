<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

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
        $this->assertRegExp(
            '/\w+/',
            $this->🧪->name
        );
    }

    // endregion
}
