<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\Phony;
use Deligoez\Phony\PhonyServiceProvider;
use Orchestra\Testbench\TestCase;

abstract class BaseTest extends TestCase
{
    protected Phony $phony;

    protected function getPackageProviders(/** @scrutinizer ignore-unused */ $app): array
    {
        return [PhonyServiceProvider::class];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->phony = app('phony');
    }
}
