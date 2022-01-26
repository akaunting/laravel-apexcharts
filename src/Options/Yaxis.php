<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Yaxis
{
    /**
     * Stores the show of the yaxis.
     *
     * @var boolean
     */
    public $yaxisShow = true;

    /**
     * Stores the showAlways of the yaxis.
     *
     * @var boolean
     */
    public $yaxisShowAlways = true;

    /**
     * Stores the showForNullSeries of the yaxis.
     *
     * @var boolean
     */
    public $yaxisShowForNullSeries = true;

    /**
     * Stores the seriesName of the yaxis.
     *
     * @var string
     */
    public $yaxisSeriesName = '';

    /**
     * Stores the opposite of the yaxis.
     *
     * @var boolean
     */
    public $yaxisOpposite = false;

    /**
     * Stores the reversed of the yaxis.
     *
     * @var boolean
     */
    public $yaxisReversed = false;

    /**
     * Stores the logarithmic of the yaxis.
     *
     * @var boolean
     */
    public $yaxisLogarithmic = false;

    /**
     * Stores the logBase of the yaxis.
     *
     * @var int
     */
    public $yaxisLogBase = 10;

    /**
     * Stores the tickAmount of the yaxis.
     *
     * @var int
     */
    public $yaxisTickAmount = 6;

    /**
     * Stores the min of the yaxis.
     *
     * @var int
     */
    public $yaxisMin = 6;

    /**
     * Stores the max of the yaxis.
     *
     * @var int
     */
    public $yaxisMax = 6;

    /**
     * Stores the forceNiceScale of the yaxis.
     *
     * @var boolean
     */
    public $yaxisForceNiceScale = false;

    /**
     * Stores the floating of the yaxis.
     *
     * @var boolean
     */
    public $yaxisFloating = false;

    /**
     * Stores the decimalsInFloat of the yaxis.
     *
     * @var string
     */
    public $yaxisDecimalsInFloat = '';

    /**
     * Stores the labels of the yaxis.
     *
     * @var array
     */
    public $yaxisLabels = [];

    /**
     * Stores the axisBorder of the yaxis.
     *
     * @var array
     */
    public $yaxisAxisBorder = [];

    /**
     * Stores the axisTicks of the yaxis.
     *
     * @var array
     */
    public $yaxisAxisTicks = [];

    /**
     * Stores the title of the yaxis.
     *
     * @var array
     */
    public $yaxisTitle = [];

    /**
     * Stores the crosshairs of the yaxis.
     *
     * @var array
     */
    public $yaxisCrosshairs = [];

    /**
     * Stores the tooltip of the yaxis.
     *
     * @var array
     */
    public $yaxisTooltip = [];

    /**
     * Set the yaxis show.
     *
     * @param boolean $yaxisShow
     *
     * @return this
     */
    public function setYaxisShow($yaxisShow) :Charts
    {
        $this->yaxisShow = $yaxisShow;

        $this->setOption([
            'yaxis' => [
                'show' => $yaxisShow,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisShow()
    {
        return $this->yaxisShow;
    }

    /**
     * Set the yaxis showAlways.
     *
     * @param boolean $yaxisShowAlways
     *
     * @return this
     */
    public function setYaxisShowAlways($yaxisShowAlways) :Charts
    {
        $this->yaxisShowAlways = $yaxisShowAlways;

        $this->setOption([
            'yaxis' => [
                'showAlways' => $yaxisShowAlways,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisShowAlways()
    {
        return $this->yaxisShowAlways;
    }

    /**
     * Set the yaxis showForNullSeries.
     *
     * @param boolean $yaxisShowForNullSeries
     *
     * @return this
     */
    public function setYaxisShowForNullSeries($yaxisShowForNullSeries) :Charts
    {
        $this->yaxisShowForNullSeries = $yaxisShowForNullSeries;

        $this->setOption([
            'yaxis' => [
                'showForNullSeries' => $yaxisShowForNullSeries,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisShowForNullSeries()
    {
        return $this->yaxisShowForNullSeries;
    }

    /**
     * Set the yaxis seriesName.
     *
     * @param string $yaxisSeriesName
     *
     * @return this
     */
    public function setYaxisSeriesName($yaxisSeriesName) :Charts
    {
        $this->yaxisSeriesName = $yaxisSeriesName;

        $this->setOption([
            'yaxis' => [
                'seriesName' => $yaxisSeriesName,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getYaxisSeriesName()
    {
        return $this->yaxisSeriesName;
    }

    /**
     * Set the yaxis opposite.
     *
     * @param boolean $yaxisOpposite
     *
     * @return this
     */
    public function setYaxisOpposite($yaxisOpposite) :Charts
    {
        $this->yaxisOpposite = $yaxisOpposite;

        $this->setOption([
            'yaxis' => [
                'opposite' => $yaxisOpposite,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisOpposite()
    {
        return $this->yaxisOpposite;
    }

    /**
     * Set the yaxis reversed.
     *
     * @param boolean $yaxisReversed
     *
     * @return this
     */
    public function setYaxisReversed($yaxisReversed) :Charts
    {
        $this->yaxisReversed = $yaxisReversed;

        $this->setOption([
            'yaxis' => [
                'reversed' => $yaxisReversed,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisReversed()
    {
        return $this->yaxisReversed;
    }

    /**
     * Set the yaxis logarithmic.
     *
     * @param boolean $yaxisLogarithmic
     *
     * @return this
     */
    public function setYaxisLogarithmic($yaxisLogarithmic) :Charts
    {
        $this->yaxisLogarithmic = $yaxisLogarithmic;

        $this->setOption([
            'yaxis' => [
                'logarithmic' => $yaxisLogarithmic,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisLogarithmic()
    {
        return $this->yaxisLogarithmic;
    }

    /**
     * Set the yaxis logBase.
     *
     * @param int $yaxisLogBase
     *
     * @return this
     */
    public function setYaxisLogBase($yaxisLogBase) :Charts
    {
        $this->yaxisLogBase = $yaxisLogBase;

        $this->setOption([
            'yaxis' => [
                'logBase' => $yaxisLogBase,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getYaxisLogBase()
    {
        return $this->yaxisLogBase;
    }

    /**
     * Set the yaxis tickAmount.
     *
     * @param int $yaxisTickAmount
     *
     * @return this
     */
    public function setYaxisTickAmount($yaxisTickAmount) :Charts
    {
        $this->yaxisTickAmount = $yaxisTickAmount;

        $this->setOption([
            'yaxis' => [
                'tickAmount' => $yaxisTickAmount,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getYaxisTickAmount()
    {
        return $this->yaxisTickAmount;
    }

    /**
     * Set the yaxis min.
     *
     * @param int $yaxisMin
     *
     * @return this
     */
    public function setYaxisMin($yaxisMin) :Charts
    {
        $this->yaxisMin = $yaxisMin;

        $this->setOption([
            'yaxis' => [
                'min' => $yaxisMin,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getYaxisMin()
    {
        return $this->yaxisMin;
    }

    /**
     * Set the yaxis max.
     *
     * @param int $yaxisMax
     *
     * @return this
     */
    public function setYaxisMax($yaxisMax) :Charts
    {
        $this->yaxisMax = $yaxisMax;

        $this->setOption([
            'yaxis' => [
                'max' => $yaxisMax,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getYaxisMax()
    {
        return $this->yaxisMax;
    }

    /**
     * Set the yaxis forceNiceScale.
     *
     * @param boolean $yaxisForceNiceScale
     *
     * @return this
     */
    public function setYaxisForceNiceScale($yaxisForceNiceScale) :Charts
    {
        $this->yaxisForceNiceScale = $yaxisForceNiceScale;

        $this->setOption([
            'yaxis' => [
                'forceNiceScale' => $yaxisForceNiceScale,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisForceNiceScale()
    {
        return $this->yaxisForceNiceScale;
    }

    /**
     * Set the yaxis floating.
     *
     * @param boolean $yaxisFloating
     *
     * @return this
     */
    public function setYaxisFloating($yaxisFloating) :Charts
    {
        $this->yaxisFloating = $yaxisFloating;

        $this->setOption([
            'yaxis' => [
                'floating' => $yaxisFloating,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisFloating()
    {
        return $this->yaxisFloating;
    }

    /**
     * Set the yaxis decimalsInFloat.
     *
     * @param string $yaxisDecimalsInFloat
     *
     * @return this
     */
    public function setYaxisDecimalsInFloat($yaxisDecimalsInFloat) :Charts
    {
        $this->yaxisDecimalsInFloat = $yaxisDecimalsInFloat;

        $this->setOption([
            'yaxis' => [
                'decimalsInFloat' => $yaxisDecimalsInFloat,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getYaxisDecimalsInFloat()
    {
        return $this->yaxisDecimalsInFloat;
    }

    /**
     * Set the yaxis labels.
     *
     * @param array $yaxisLabels
     *
     * @return this
     */
    public function setYaxisLabels($yaxisLabels) :Charts
    {
        $this->yaxisLabels = $yaxisLabels;

        $this->setOption([
            'yaxis' => [
                'labels' => $yaxisLabels,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getYaxisLabels()
    {
        return $this->yaxisLabels;
    }

    /**
     * Set the yaxis axisBorder.
     *
     * @param array $yaxisAxisBorder
     *
     * @return this
     */
    public function setYaxisAxisBorder($yaxisAxisBorder) :Charts
    {
        $this->yaxisAxisBorder = $yaxisAxisBorder;

        $this->setOption([
            'yaxis' => [
                'axisBorder' => $yaxisAxisBorder,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getYaxisAxisBorder()
    {
        return $this->yaxisAxisBorder;
    }

    /**
     * Set the yaxis axisTicks.
     *
     * @param array $yaxisAxisTicks
     *
     * @return this
     */
    public function setYaxisAxisTicks($yaxisAxisTicks) :Charts
    {
        $this->yaxisAxisTicks = $yaxisAxisTicks;

        $this->setOption([
            'yaxis' => [
                'axisTicks' => $yaxisAxisTicks,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getYaxisAxisTicks()
    {
        return $this->yaxisAxisTicks;
    }

    /**
     * Set the yaxis title.
     *
     * @param array $yaxisTitle
     *
     * @return this
     */
    public function setYaxisTitle($yaxisTitle) :Charts
    {
        $this->yaxisTitle = $yaxisTitle;

        $this->setOption([
            'yaxis' => [
                'title' => $yaxisTitle,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getYaxisTitle()
    {
        return $this->yaxisTitle;
    }

    /**
     * Set the yaxis crosshairs.
     *
     * @param array $yaxisCrosshairs
     *
     * @return this
     */
    public function setYaxisCrosshairs($yaxisCrosshairs) :Charts
    {
        $this->yaxisCrosshairs = $yaxisCrosshairs;

        $this->setOption([
            'yaxis' => [
                'crosshairs' => $yaxisCrosshairs,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getYaxisCrosshairs()
    {
        return $this->yaxisCrosshairs;
    }

    /**
     * Set the yaxis tooltip.
     *
     * @param boolean $yaxisTooltip
     *
     * @return this
     */
    public function setYaxisTooltip($yaxisTooltip) :Charts
    {
        $this->yaxisTooltip = $yaxisTooltip;

        $this->setOption([
            'yaxis' => [
                'tooltip' => $yaxisTooltip,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getYaxisTooltip()
    {
        return $this->yaxisTooltip;
    }
}
