<?php

namespace Akaunting\Apexcharts\Tests\Feature;

use Akaunting\Apexcharts\Chart;
use Akaunting\Apexcharts\Tests\TestCase;
use Illuminate\Support\Facades\File;

class ScriptTest extends TestCase
{
    protected function tearDown(): void
    {
        File::deleteDirectory(public_path('vendor/apexcharts'));

        parent::tearDown();
    }

    protected function publishScript(): void
    {
        File::ensureDirectoryExists(public_path('vendor/apexcharts'));
        File::put(public_path('vendor/apexcharts/apexcharts.js'), '');
    }

    public function testCdnIsUsedWhenScriptIsNotPublished()
    {
        $this->assertSame(
            '<script src="https://cdn.jsdelivr.net/npm/apexcharts@4.7.0/dist/apexcharts.min.js"></script>',
            Chart::loadScript()
        );
    }

    public function testPublishedScriptIsUsedFromPublicPath()
    {
        $this->publishScript();

        $this->assertSame(
            '<script src="' . asset('vendor/apexcharts/apexcharts.js') . '"></script>',
            Chart::loadScript()
        );
    }

    public function testScriptUrlCanBeChanged()
    {
        $this->publishScript();

        config(['apexcharts.script.url' => 'public/vendor/apexcharts/apexcharts.js']);

        $this->assertSame(
            '<script src="' . asset('public/vendor/apexcharts/apexcharts.js') . '"></script>',
            Chart::loadScript()
        );
    }

    public function testCdnCanBeChanged()
    {
        config(['apexcharts.script.cdn' => 'https://example.com/apexcharts.js']);

        $this->assertSame('<script src="https://example.com/apexcharts.js"></script>', Chart::loadScript());
    }

    public function testLocalScriptCanBeDisabled()
    {
        $this->publishScript();

        config(['apexcharts.script.file' => null]);

        $this->assertStringContainsString('cdn.jsdelivr.net', Chart::loadScript());
    }

    public function testBladeDirectiveLoadsScript()
    {
        $html = $this->app['blade.compiler']->compileString('@apexchartsScripts');

        $this->assertStringContainsString('Chart::loadScript()', $html);
    }
}
