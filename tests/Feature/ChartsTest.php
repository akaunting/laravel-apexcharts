<?php

namespace Akaunting\Apexcharts\Tests\Feature;

use Akaunting\Apexcharts\Chart;
use Akaunting\Apexcharts\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChartsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_tests_apexcharts_can_render_pie_charts_by_default()
    {
        $chart = (new Chart)->setTitle('Users Test Chart');
        $this->assertEquals('line', $chart->getType());

        $anotherChart = (new Chart)->setType('area');
        $this->assertEquals('area', $anotherChart->getType());
    }

    /** @test */
    public function it_tests_apexcharts_can_render_pie_chart()
    {
        $chart = (new Chart)->setType('pie')
            ->setTitle('Posts')
            ->setSubtitle('From January To March')
            ->setLabels(['Product One', 'Product Two', 'Product Three'])
            ->setSeries(['Jan', 'Feb', 'Mar'])
            ->setDataset('posts', 'pie', [150, 120]);

        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('pie', $chart->getType());
    }

    /** @test */
    public function it_tests_apexcharts_can_render_donut_chart()
    {
        $chart = (new Chart)->setType('donut')
            ->setTitle('Posts')
            ->setSeries(['Jan', 'Feb', 'Mar'])
            ->setDataset('posts', 'donut', [150, 120]);

        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('donut', $chart->getType());
    }

    /** @test */
    public function it_tests_larapex_can_render_radial_bar_charts()
    {
        $chart = (new Chart)->setType('radial')
            ->setTitle('Products with more profit')
            ->setSeries(['Jan', 'Feb', 'Mar'])
            ->setDataset('products', 'radial', [60, 40, 79]);

        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('radial', $chart->getType());
    }

    /** @test */
    public function it_tests_apexcharts_can_render_polar_chart()
    {
        $chart = (new Chart)->setType('polarArea')
            ->setTitle('Products with more profit')
            ->setSeries(['Jan', 'Feb', 'Mar'])
            ->setDataset('polarArea', 'radial', [60, 40, 79]);

        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('polarArea', $chart->getType());
    }

    /** @test */
    public function larapex_can_render_line_charts()
    {
        $chart = (new Chart)->setType('line')
            ->setTitle('Total Users Monthly')
            ->setSubtitle('From January to March')
            ->setSeries([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset('line', 'users', [
                [
                    'name'  =>  'Active Users',
                    'data'  =>  [250, 700, 1200]
                ]
            ])
            ->setHeight(250)
            ->setGridShow(true)
            ->setStrokeShow(true);

        $this->assertEquals($chart->getId(), $chart->container()['chart']->getId());
        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('line', $chart->getType());
    }

    /** @test */
    public function it_tests_apexcharts_can_create_an_area_chart()
    {
        $chart = (new Chart)->setType('area')
            ->setTitle('Total Users Monthly')
            ->setSubtitle('From January to March')
            ->setSeries([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset('area', 'users', [
                [
                    'name'  =>  'Active Users',
                    'data'  =>  [250, 700, 1200]
                ],
                [
                    'name'  =>  'New Users',
                    'data'  =>  [1000, 1124, 2000]
                ]
            ]);

        $this->assertEquals($chart->getId(), $chart->container()['chart']->getId());
        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('area', $chart->getType());
    }

    /** @test */
    public function it_tests_apexcharts_can_render_bar_charts()
    {
        $chart = (new Chart)->setType('bar')
            ->setTitle('Net Profit')
            ->setSeries(['Jan', 'Feb', 'Mar'])
            ->setDataset('bar', 'profit', [
                [
                    'name'  => 'Company A',
                    'data'  =>  [500, 1000, 1900]
                ],
                [
                    'name'  => 'Company B',
                    'data'  => [300, 900, 1400]
                ],
                [
                    'name'  => 'Company C',
                    'data'  => [430, 245, 500]
                ],
                [
                    'name'  => 'Company D',
                    'data'  => [200, 245, 700]
                ],
                [
                    'name'  => 'Company E',
                    'data'  => [120, 45, 610]
                ],
                [
                    'name'  => 'Company F',
                    'data'  => [420, 280, 400]
                ]
            ]);

        $this->assertEquals($chart->getId(), $chart->container()['chart']->getId());
        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('bar', $chart->getType());
    }

    /** @test */
    public function it_tests_apexcharts_can_render_horizontal_bar_chart()
    {
        $chart = (new Chart)->setType('bar')
            ->setTitle('Net Profit')
            ->setHorizontal(true)
            ->setSeries(['Jan', 'Feb', 'Mar'])
            ->setDataset('bar', 'profit', [
                [
                    'name'  => 'Company A',
                    'data'  =>  [500, 1000, 1900]
                ],
                [
                    'name'  => 'Company B',
                    'data'  => [300, 900, 1400]
                ],
                [
                    'name'  => 'Company C',
                    'data'  => [430, 245, 500]
                ]
            ]);

        $this->assertEquals($chart->getId(), $chart->container()['chart']->getId());
        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('bar', $chart->getType());
        $this->assertTrue($chart->getHorizontal());
    }

    /** @test */
    public function it_tests_apexcharts_can_render_heatmap_chart()
    {
        $chart = (new Chart)->setType('heatmap')
            ->setTitle('Total Users')
            ->setSeries([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset('heatmap', 'users', [
                [
                    'name'  =>  'Users of Basic Plan',
                    'data'  =>  [250, 700, 1200]
                ],
                [
                    'name'  =>  'Users of Premium Plan',
                    'data'  =>  [1000, 1124, 2000]
                ]
            ]);

        $this->assertEquals($chart->getId(), $chart->container()['chart']->getId());
        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('heatmap', $chart->getType());
    }

    /** @test */
    public function it_tests_apexcharts_can_render_radar_chart()
    {
        $chart = (new Chart)->setType('radar')
            ->setTitle('Total Users')
            ->setSeries([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset('radar', 'users', [
                [
                    'name'  =>  'Users of Basic Plan',
                    'data'  =>  [250, 700, 1200]
                ],
                [
                    'name'  =>  'Users of Premium Plan',
                    'data'  =>  [1000, 1124, 2000]
                ]
            ]);

        $this->assertEquals($chart->getId(), $chart->container()['chart']->getId());
        $this->assertEquals($chart, $chart->script()['chart']);
        $this->assertEquals('radar', $chart->getType());
    }
}
