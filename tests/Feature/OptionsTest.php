<?php

namespace Akaunting\Apexcharts\Tests\Feature;

use Akaunting\Apexcharts\Chart;
use Akaunting\Apexcharts\Tests\TestCase;
use Balping\JsonRaw\Raw;

class OptionsTest extends TestCase
{
    public function testDataLabelsBackgroundIsSetUnderBackgroundKey()
    {
        $chart = (new Chart)->setDataLabelsBackground(['enabled' => true, 'foreColor' => '#fff']);

        $this->assertSame(['enabled' => true, 'foreColor' => '#fff'], $chart->options['dataLabels']['background']);
        $this->assertFalse($chart->options['dataLabels']['enabled']);
    }

    public function testToVueDoesNotDuplicateSeriesInsideOptions()
    {
        $vue = (new Chart)->setType('bar')
            ->setDataset('Some name', 'bar', [1])
            ->setXaxisCategories(['Some category'])
            ->toVue();

        $this->assertArrayNotHasKey('series', $vue['options']);
        $this->assertCount(1, $vue['series']);
    }

    public function testScriptStillContainsSeriesInsideOptions()
    {
        $chart = (new Chart)->setType('bar')->setDataset('Sales', 'bar', [1, 2]);

        $this->assertArrayHasKey('series', json_decode($chart->getOptions(), true));
    }

    public function testResponsiveIsAListOfBreakpoints()
    {
        $chart = (new Chart)
            ->addResponsive(480, ['legend' => ['position' => 'bottom']])
            ->addResponsive(1024, ['chart' => ['height' => 300]]);

        $this->assertSame([
            ['breakpoint' => 480, 'options' => ['legend' => ['position' => 'bottom']]],
            ['breakpoint' => 1024, 'options' => ['chart' => ['height' => 300]]],
        ], $chart->options['responsive']);
    }

    public function testResponsiveBreakpointAndOptionsSetTheFirstEntry()
    {
        $chart = (new Chart)
            ->setResponsiveBreakpoint(480)
            ->setResponsiveOptions(['legend' => ['show' => false]]);

        $this->assertSame([
            ['breakpoint' => 480, 'options' => ['legend' => ['show' => false]]],
        ], $chart->options['responsive']);

        $this->assertSame(
            '[{"breakpoint":480,"options":{"legend":{"show":false}}}]',
            json_encode(json_decode($chart->getOptions(), true)['responsive'])
        );
    }

    public function testSetResponsiveReplacesPreviousEntries()
    {
        $chart = (new Chart)
            ->addResponsive(480, ['legend' => ['show' => false]])
            ->setResponsive([['breakpoint' => 768, 'options' => ['chart' => ['height' => 200]]]]);

        $this->assertSame([['breakpoint' => 768, 'options' => ['chart' => ['height' => 200]]]], $chart->getResponsive());
    }

    public function testRawJavascriptFormatterIsRenderedUnquoted()
    {
        $chart = (new Chart)->setXaxisLabels([
            'formatter' => new Raw('function (value) { return value + "%"; }'),
        ]);

        $this->assertStringContainsString(
            '"formatter":function (value) { return value + "%"; }',
            $chart->getOptions()
        );
    }

    public function testTooltipThemeAcceptsThemeName()
    {
        $chart = (new Chart)->setTooltipTheme('dark');

        $this->assertSame('dark', $chart->getTooltipTheme());
        $this->assertSame('dark', $chart->options['tooltip']['theme']);
    }

    public function testAxisMinAndMaxAcceptFloats()
    {
        $chart = (new Chart)->setXaxisMin(0.5)->setXaxisMax(9.5)->setYaxisMin(-1.25)->setYaxisMax(99.9);

        $this->assertSame(0.5, $chart->options['xaxis']['min']);
        $this->assertSame(9.5, $chart->options['xaxis']['max']);
        $this->assertSame(-1.25, $chart->options['yaxis']['min']);
        $this->assertSame(99.9, $chart->options['yaxis']['max']);
    }

    public function testTypeCanBeNull()
    {
        $chart = (new Chart)->setType(null)->setDataset('Sales', 'bar', [1, 2]);

        $this->assertSame('bar', $chart->getType());
    }
}
