<?php

namespace Deligoez\Phony\Tests;

use Deligoez\Phony\Phony;
use Deligoez\Phony\Fakes\Fake;
use Orchestra\Testbench\TestCase;
use Deligoez\Phony\PhonyServiceProvider;

abstract class BaseTest extends TestCase
{
    protected Phony $phony;
    protected Fake $tester;

    protected function getPackageProviders($app): array
    {
        return [PhonyServiceProvider::class];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->phony = app('phony');
    }

    protected function setTester(Fake $fake): void
    {
        $this->tester = $fake;
    }
}
