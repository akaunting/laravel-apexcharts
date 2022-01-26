<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait PlotOptions
{
    /**
     * Stores the area of the plotOptions.
     *
     * @var string
     */
    public $area = 'origin';

    /**
     * Stores the bar of the plotOptions.
     *
     * @var array|collect
     */
    public $bar = [
        'horizontal' => false,
    ];

    /**
     * Stores the bubble of the plotOptions.
     *
     * @var array|collect
     */
    public $bubble = [];

    /**
     * Stores the bubble of the plotOptions.
     *
     * @var array|collect
     */
    public $candlestick = [];

    /**
     * Stores the boxPlot of the plotOptions.
     *
     * @var array|collect
     */
    public $boxPlot = [];

    /**
     * Stores the heatmap of the plotOptions.
     *
     * @var array|collect
     */
    public $heatmap = [];

    /**
     * Stores the treemap of the plotOptions.
     *
     * @var array|collect
     */
    public $treemap = [];

    /**
     * Stores the pie of the plotOptions.
     *
     * @var array|collect
     */
    public $pie = [];

    /**
     * Stores the polarArea of the plotOptions.
     *
     * @var array|collect
     */
    public $polarArea = [];

    /**
     * Stores the radar of the plotOptions.
     *
     * @var array|collect
     */
    public $radar = [];

    /**
     * Stores the radialBar of the plotOptions.
     *
     * @var array|collect
     */
    public $radialBar = [];

    /**
     * Set the plotOptions area.
     *
     * @param string $area
     *
     * @return this
     */
    public function setArea(string $area) :Charts
    {
        $this->area = $area;

        $this->setOption([
            'plotOptions' => [
                'area' => $area,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the plotOptions bar.
     *
     * @param array $bar
     *
     * @return this
     */
    public function setBar(array $bar) :Charts
    {
        $this->bar = $bar;

        $this->setOption([
            'plotOptions' => [
                'bar' => $bar,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * Set the plotOptions bubble.
     *
     * @param array $bubble
     *
     * @return this
     */
    public function setBubble($bubble) :Charts
    {
        $this->bubble = $bubble;

        $this->setOption([
            'plotOptions' => [
                'bubble' => $bubble,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getBubble()
    {
        return $this->bubble;
    }

    /**
     * Set the plotOptions candlestick.
     *
     * @param array $candlestick
     *
     * @return this
     */
    public function setCandlestick($candlestick) :Charts
    {
        $this->candlestick = $candlestick;

        $this->setOption([
            'plotOptions' => [
                'candlestick' => $candlestick,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getCandlestick()
    {
        return $this->candlestick;
    }

    /**
     * Set the plotOptions boxPlot.
     *
     * @param array $boxPlot
     *
     * @return this
     */
    public function setBoxPlot($boxPlot) :Charts
    {
        $this->boxPlot = $boxPlot;

        $this->setOption([
            'plotOptions' => [
                'boxPlot' => $boxPlot,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getBoxPlot()
    {
        return $this->boxPlot;
    }

    /**
     * Set the plotOptions heatmap.
     *
     * @param array $heatmap
     *
     * @return this
     */
    public function setHeatmap($heatmap) :Charts
    {
        $this->heatmap = $heatmap;

        $this->setOption([
            'plotOptions' => [
                'heatmap' => $heatmap,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getHeatmap()
    {
        return $this->heatmap;
    }

    /**
     * Set the plotOptions treemap.
     *
     * @param array $treemap
     *
     * @return this
     */
    public function setTreemap($treemap) :Charts
    {
        $this->treemap = $treemap;

        $this->setOption([
            'plotOptions' => [
                'treemap' => $treemap,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getTreemap()
    {
        return $this->treemap;
    }

    /**
     * Set the plotOptions pie.
     *
     * @param array $pie
     *
     * @return this
     */
    public function setPie($pie) :Charts
    {
        $this->pie = $pie;

        $this->setOption([
            'plotOptions' => [
                'pie' => $pie,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getPie()
    {
        return $this->pie;
    }

    /**
     * Set the plotOptions polarArea.
     *
     * @param array $polarArea
     *
     * @return this
     */
    public function setPolarArea($polarArea) :Charts
    {
        $this->polarArea = $polarArea;

        $this->setOption([
            'plotOptions' => [
                'polarArea' => $polarArea,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getPolarArea()
    {
        return $this->polarArea;
    }

    /**
     * Set the plotOptions radar.
     *
     * @param array $radar
     *
     * @return this
     */
    public function setRadar($radar) :Charts
    {
        $this->radar = $radar;

        $this->setOption([
            'plotOptions' => [
                'radar' => $radar,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getRadar()
    {
        return $this->radar;
    }

    /**
     * Set the plotOptions radialBar.
     *
     * @param array $radialBar
     *
     * @return this
     */
    public function setRadialBar($radialBar) :Charts
    {
        $this->radialBar = $radialBar;

        $this->setOption([
            'plotOptions' => [
                'radialBar' => $radialBar,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getRadialBar()
    {
        return $this->radialBar;
    }
}
