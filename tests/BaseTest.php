<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\Phony;
use Orchestra\Testbench\TestCase;
use Deligoez\Phony\PhonyServiceProvider;

abstract class BaseTest extends TestCase
{
    protected Phony $phony;

    protected function getPackageProviders($app): array
    {
        return [PhonyServiceProvider::class];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->phony = app('phony');
    }
}
