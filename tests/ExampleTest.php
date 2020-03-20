<?php

namespace Deligoez\Phony\Tests;

use Orchestra\Testbench\TestCase;
use Deligoez\Phony\PhonyServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PhonyServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
