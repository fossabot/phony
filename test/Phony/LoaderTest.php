<?php

namespace Phony\Test\Phony;

use Phony\Loader;
use Phony\Test\BaseTest;
use RuntimeException;

class LoaderTest extends BaseTest
{
    /** @test */
    public function throws_exception_if_file_not_found(): void
    {
        $this->expectException(RuntimeException::class);

        $this->🙃->alphabet->invalidAttribute;
    }
}
