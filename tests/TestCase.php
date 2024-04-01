<?php

namespace Akaunting\Apexcharts\Tests;

use Akaunting\Apexcharts\Facade;
use Akaunting\Apexcharts\Provider;
use Orchestra\Testbench\TestCase as TestBenchTestCase;

class TestCase extends TestBenchTestCase
{
    /**
     * Load the package service provider.
     */
    protected function getPackageProviders($app): array
    {
        return [
            Provider::class,
        ];
    }
}
