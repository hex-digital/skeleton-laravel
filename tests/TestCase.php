<?php

declare(strict_types=1);

namespace HexDigital\Skeleton\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use HexDigital\Skeleton\SkeletonServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            SkeletonServiceProvider::class,
        ];
    }
}
