<?php

namespace Deligoez\Phony\Tests;

use Orchestra\Testbench\TestCase;
use Deligoez\Phony\PhonyServiceProvider;

abstract class BaseTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [PhonyServiceProvider::class];
    }
}
