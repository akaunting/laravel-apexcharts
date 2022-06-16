<?php

namespace Akaunting\Apexcharts\Tests\Unit;

use Akaunting\Apexcharts\Chart;
use Akaunting\Apexcharts\Tests\TestCase;

class ChartsTest extends TestCase
{
    /** @test */
    public function it_tests_apexcharts_install_add_chart_stubs()
    {
        $chartTypes = collect([
            'Pie',
            'Donut',
            'RadialBar',
            'PolarArea',
            'Line',
            'Area',
            'Bar',
            'HorizontalBar',
            'HeatMap',
            'Radar',
        ]);
    }

    /** @test */
    public function it_tests_apexcharts_can_load_script_correctly()
    {
        $chart = (new Chart)
            ->setTitle('Posts')
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([150, 120])
            ->setLabels([__('Published'), __('No Published')]);

        $this->assertEquals($chart->dataset(), $chart->script()['chart']->dataset());
    }

    /** @test */
    public function it_tests_apexcharts_can_change_default_config_colors()
    {
        $chart = (new Chart)->setTitle('Posts')->setXAxis(['Jan', 'Feb', 'Mar'])->setDataset([150, 120]);

        $oldColors = $chart->colors();

        $chart->setColors(['#fe9700', '#607c8a']);
        $this->assertNotEquals($oldColors, $chart->colors());
    }

    /** @test */
    public function it_tests_larapex_chart_cdn_returns_a_correct_url()
    {
        $this->assertEquals('https://cdn.jsdelivr.net/npm/apexcharts', (new Chart)->cdn());
    }
}
