<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Xaxis
{
    /**
     * Stores the show of the xaxis.
     *
     * @var boolean
     */
    public $xaxisType = true;

    /**
     * Stores the categories of the xaxis.
     *
     * @var array
     */
    public $xaxisCategories = true;

    /**
     * Stores the tickAmount of the xaxis.
     *
     * @var int
     */
    public $xaxisTickAmount = 6;

    /**
     * Stores the tickPlacement of the xaxis.
     *
     * @var string
     */
    public $xaxisTickPlacement = 'between';

    /**
     * Stores the min of the xaxis.
     *
     * @var int
     */
    public $xaxisMin;

    /**
     * Stores the max of the xaxis.
     *
     * @var int
     */
    public $xaxisMax;

    /**
     * Stores the range of the xaxis.
     *
     * @var int
     */
    public $xaxisRange;

    /**
     * Stores the floating of the xaxis.
     *
     * @var boolean
     */
    public $xaxisFloating = false;

    /**
     * Stores the decimalsInFloat of the xaxis.
     *
     * @var string
     */
    public $xaxisDecimalsInFloat = '';

    /**
     * Stores the logarithmic of the xaxis.
     *
     * @var array
     */
    public $xaxisOverwriteCategories;

    /**
     * Stores the logBase of the xaxis.
     *
     * @var string
     */
    public $xaxisPosition = 'bottom';

    /**
     * Stores the labels of the xaxis.
     *
     * @var array
     */
    public $xaxisLabels = [];

    /**
     * Stores the axisBorder of the xaxis.
     *
     * @var array
     */
    public $xaxisAxisBorder = [];

    /**
     * Stores the axisTicks of the xaxis.
     *
     * @var array
     */
    public $xaxisAxisTicks = [];

    /**
     * Stores the title of the xaxis.
     *
     * @var array
     */
    public $xaxisTitle = [];

    /**
     * Stores the crosshairs of the xaxis.
     *
     * @var array
     */
    public $xaxisCrosshairs = [];

    /**
     * Stores the tooltip of the xaxis.
     *
     * @var array
     */
    public $xaxisTooltip = [];

    /**
     * Set the xaxis type.
     *
     * @param boolean $xaxisType
     *
     * @return this
     */
    public function setXaxisType($xaxisType) :Charts
    {
        $this->xaxisType = $xaxisType;

        $this->setOption([
            'xaxis' => [
                'type' => $xaxisType,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getXaxisType()
    {
        return $this->xaxisType;
    }

    /**
     * Set the xaxis categories.
     *
     * @param array $xaxisCategories
     *
     * @return this
     */
    public function setXaxisCategories($xaxisCategories) :Charts
    {
        $this->xaxisCategories = $xaxisCategories;

        $this->setOption([
            'xaxis' => [
                'categories' => $xaxisCategories,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getXaxisCategories()
    {
        return $this->xaxisCategories;
    }

    /**
     * Set the xaxis tickAmount.
     *
     * @param int $xaxisTickAmount
     *
     * @return this
     */
    public function setXaxisTickAmount($xaxisTickAmount) :Charts
    {
        $this->xaxisTickAmount = $xaxisTickAmount;

        $this->setOption([
            'xaxis' => [
                'tickAmount' => $xaxisTickAmount,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getXaxisTickAmount()
    {
        return $this->xaxisTickAmount;
    }

    /**
     * Set the xaxis tickPlacement.
     *
     * @param string $xaxisTickPlacement
     *
     * @return this
     */
    public function setXaxisTickPlacement($xaxisTickPlacement) :Charts
    {
        $this->xaxisTickPlacement = $xaxisTickPlacement;

        $this->setOption([
            'xaxis' => [
                'tickPlacement' => $xaxisTickPlacement,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getXaxisTickPlacement()
    {
        return $this->xaxisTickPlacement;
    }

    /**
     * Set the xaxis min.
     *
     * @param int $xaxisMin
     *
     * @return this
     */
    public function setXaxisMin($xaxisMin) :Charts
    {
        $this->xaxisMin = $xaxisMin;

        $this->setOption([
            'xaxis' => [
                'min' => $xaxisMin,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getXaxisMin()
    {
        return $this->xaxisMin;
    }

    /**
     * Set the xaxis max.
     *
     * @param int $xaxisMax
     *
     * @return this
     */
    public function setXaxisMax($xaxisMax) :Charts
    {
        $this->xaxisMax = $xaxisMax;

        $this->setOption([
            'xaxis' => [
                'max' => $xaxisMax,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getXaxisMax()
    {
        return $this->xaxisMax;
    }

    /**
     * Set the xaxis range.
     *
     * @param int $xaxisRange
     *
     * @return this
     */
    public function setXaxisRange($xaxisRange) :Charts
    {
        $this->xaxisRange = $xaxisRange;

        $this->setOption([
            'xaxis' => [
                'range' => $xaxisRange,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getXaxisRange()
    {
        return $this->xaxisRange;
    }

    /**
     * Set the xaxis floating.
     *
     * @param boolean $xaxisFloating
     *
     * @return this
     */
    public function setXaxisFloating($xaxisFloating) :Charts
    {
        $this->xaxisFloating = $xaxisFloating;

        $this->setOption([
            'xaxis' => [
                'floating' => $xaxisFloating,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getXaxisFloating()
    {
        return $this->xaxisFloating;
    }

    /**
     * Set the xaxis decimalsInFloat.
     *
     * @param string $xaxisDecimalsInFloat
     *
     * @return this
     */
    public function setXaxisDecimalsInFloat($xaxisDecimalsInFloat) :Charts
    {
        $this->xaxisDecimalsInFloat = $xaxisDecimalsInFloat;

        $this->setOption([
            'xaxis' => [
                'decimalsInFloat' => $xaxisDecimalsInFloat,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getXaxisDecimalsInFloat()
    {
        return $this->xaxisDecimalsInFloat;
    }

    /**
     * Set the xaxis overwriteCategories.
     *
     * @param array $xaxisOverwriteCategories
     *
     * @return this
     */
    public function setXaxisOverwriteCategories($xaxisOverwriteCategories) :Charts
    {
        $this->xaxisOverwriteCategories = $xaxisOverwriteCategories;

        $this->setOption([
            'xaxis' => [
                'overwriteCategories' => $xaxisOverwriteCategories,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getXaxisOverwriteCategories()
    {
        return $this->xaxisOverwriteCategories;
    }

    /**
     * Set the xaxis position.
     *
     * @param boolean $xaxisPosition
     *
     * @return this
     */
    public function setXaxisPosition($xaxisPosition) :Charts
    {
        $this->xaxisPosition = $xaxisPosition;

        $this->setOption([
            'xaxis' => [
                'position' => $xaxisPosition,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getXaxisPosition()
    {
        return $this->xaxisPosition;
    }

    /**
     * Set the xaxis labels.
     *
     * @param array $xaxisLabels
     *
     * @return this
     */
    public function setXaxisLabels($xaxisLabels) :Charts
    {
        $this->xaxisLabels = $xaxisLabels;

        $this->setOption([
            'xaxis' => [
                'labels' => $xaxisLabels,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getXaxisLabels()
    {
        return $this->xaxisLabels;
    }

    /**
     * Set the xaxis axisBorder.
     *
     * @param array $xaxisAxisBorder
     *
     * @return this
     */
    public function setXaxisAxisBorder($xaxisAxisBorder) :Charts
    {
        $this->xaxisAxisBorder = $xaxisAxisBorder;

        $this->setOption([
            'xaxis' => [
                'axisBorder' => $xaxisAxisBorder,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getXaxisAxisBorder()
    {
        return $this->xaxisAxisBorder;
    }

    /**
     * Set the xaxis axisTicks.
     *
     * @param array $xaxisAxisTicks
     *
     * @return this
     */
    public function setXaxisAxisTicks($xaxisAxisTicks) :Charts
    {
        $this->xaxisAxisTicks = $xaxisAxisTicks;

        $this->setOption([
            'xaxis' => [
                'axisTicks' => $xaxisAxisTicks,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getXaxisAxisTicks()
    {
        return $this->xaxisAxisTicks;
    }

    /**
     * Set the xaxis title.
     *
     * @param array $xaxisTitle
     *
     * @return this
     */
    public function setXaxisTitle($xaxisTitle) :Charts
    {
        $this->xaxisTitle = $xaxisTitle;

        $this->setOption([
            'xaxis' => [
                'title' => $xaxisTitle,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getXaxisTitle()
    {
        return $this->xaxisTitle;
    }

    /**
     * Set the xaxis crosshairs.
     *
     * @param array $xaxisCrosshairs
     *
     * @return this
     */
    public function setXaxisCrosshairs($xaxisCrosshairs) :Charts
    {
        $this->xaxisCrosshairs = $xaxisCrosshairs;

        $this->setOption([
            'xaxis' => [
                'crosshairs' => $xaxisCrosshairs,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getXaxisCrosshairs()
    {
        return $this->xaxisCrosshairs;
    }

    /**
     * Set the xaxis tooltip.
     *
     * @param boolean $xaxisTooltip
     *
     * @return this
     */
    public function setXaxisTooltip($xaxisTooltip) :Charts
    {
        $this->xaxisTooltip = $xaxisTooltip;

        $this->setOption([
            'xaxis' => [
                'tooltip' => $xaxisTooltip,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getXaxisTooltip()
    {
        return $this->xaxisTooltip;
    }
}
