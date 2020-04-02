<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\Phony;

class PlaygroundTest extends BaseTest
{
    /** @test */
    public function phony_memory_test(): void
    {
        //var_dump('phony: before: ' . memory_get_usage() / 1024 / 1024 . ' / ' . memory_get_peak_usage() / 1024 / 1024);

        $🙃 = new Phony('en');

        //var_dump('phony: creation: ' . memory_get_usage() / 1024 / 1024 . ' / ' . memory_get_peak_usage() / 1024 / 1024);

        foreach (range(1, 10_000_000) as $i) {
            $🙃->person->first_name;
        }

        //var_dump('phony: afterrun: ' . memory_get_usage() / 1024 / 1024 . ' / ' . memory_get_peak_usage() / 1024 / 1024);

        $this->assertTrue(true);
    }
}
