<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Legend
{
    /**
     * Stores the show of the grid.
     *
     * @var boolean
     */
    public $legendShow = true;

    /**
     * Stores the showForSingleSeries of the grid.
     *
     * @var boolean
     */
    public $legendShowForSingleSeries = false;

    /**
     * Stores the showForNullSeries of the grid.
     *
     * @var boolean
     */
    public $legendShowForNullSeries = true;

    /**
     * Stores the showForZeroSeries of the grid.
     *
     * @var boolean
     */
    public $legendShowForZeroSeries = true;

    /**
     * Stores the position of the grid.
     *
     * @var string
     */
    public $legendPosition = 'bottom';

    /**
     * Stores the horizontalAlign of the grid.
     *
     * @var string
     */
    public $legendHorizontalAlign = 'center';

    /**
     * Stores the floating of the grid.
     *
     * @var boolean
     */
    public $legendFloating = false;

    /**
     * Stores the fontSize of the grid.
     *
     * @var string
     */
    public $legendFontSize = '14px';

    /**
     * Stores the fontFamily of the grid.
     *
     * @var string
     */
    public $legendFontFamily = 'Helvetica, Arial';

    /**
     * Stores the fontWeight of the grid.
     *
     * @var string|int
     */
    public $legendFontWeight = 400;

    /**
     * Stores the formatter of the grid.
     *
     * @var function
     */
    public $legendFormatter;

    /**
     * Stores the inverseOrder of the grid.
     *
     * @var boolean
     */
    public $legendInverseOrder = false;

    /**
     * Stores the width of the grid.
     *
     * @var int
     */
    public $legendWidth;

    /**
     * Stores the height of the grid.
     *
     * @var int
     */
    public $legendHeight;

    /**
     * Stores the tooltipHoverFormatter of the grid.
     *
     * @var function
     */
    public $legendTooltipHoverFormatter;

    /**
     * Stores the customLegendItems of the grid.
     *
     * @var array
     */
    public $legendCustomLegendItems = [];

    /**
     * Stores the offsetX of the grid.
     *
     * @var int
     */
    public $legendOffsetX = 0;

    /**
     * Stores the offsetY of the grid.
     *
     * @var int
     */
    public $legendOffsetY = 0;

    /**
     * Stores the labels of the grid.
     *
     * @var array
     */
    public $legendLabels = [];

    /**
     * Stores the markers of the grid.
     *
     * @var array
     */
    public $legendMarkers = [];

    /**
     * Stores the itemMargin of the grid.
     *
     * @var array
     */
    public $legendItemMargin = [];

    /**
     * Stores the onItemClick of the grid.
     *
     * @var array
     */
    public $legendOnItemClick = [];

    /**
     * Stores the onItemHover of the grid.
     *
     * @var array
     */
    public $legendOnItemHover = [];

    /**
     * Set the legend show.
     *
     * @param string $legendShow
     *
     * @return this
     */
    public function setLegendShow($legendShow) :Charts
    {
        $this->legendShow = $legendShow;

        $this->setOption([
            'legend' => [
                'show' => $legendShow,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendShow()
    {
        return $this->legendShow;
    }

    /**
     * Set the legend showForSingleSeries.
     *
     * @param boolean $legendShowForSingleSeries
     *
     * @return this
     */
    public function setLegendShowForSingleSeries($legendShowForSingleSeries) :Charts
    {
        $this->legendShowForSingleSeries = $legendShowForSingleSeries;

        $this->setOption([
            'legend' => [
                'showForSingleSeries' => $legendShowForSingleSeries,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendShowForSingleSeries()
    {
        return $this->legendShowForSingleSeries;
    }

    /**
     * Set the legend showForNullSeries.
     *
     * @param string $legendShowForNullSeries
     *
     * @return this
     */
    public function setLegendShowForNullSeries($legendShowForNullSeries) :Charts
    {
        $this->legendShowForNullSeries = $legendShowForNullSeries;

        $this->setOption([
            'legend' => [
                'showForNullSeries' => $legendShowForNullSeries,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendShowForNullSeries()
    {
        return $this->legendShowForNullSeries;
    }

    /**
     * Set the legend showForZeroSeries.
     *
     * @param string $legendShowForZeroSeries
     *
     * @return this
     */
    public function setLegendShowForZeroSeries($legendShowForZeroSeries) :Charts
    {
        $this->legendShowForZeroSeries = $legendShowForZeroSeries;

        $this->setOption([
            'legend' => [
                'showForZeroSeries' => $legendShowForZeroSeries,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendShowForZeroSeries()
    {
        return $this->legendShowForZeroSeries;
    }

    /**
     * Set the legend position.
     *
     * @param string $legendPosition
     *
     * @return this
     */
    public function setLegendPosition($legendPosition) :Charts
    {
        $this->legendPosition = $legendPosition;

        $this->setOption([
            'legend' => [
                'position' => $legendPosition,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getLegendPosition()
    {
        return $this->legendPosition;
    }

    /**
     * Set the legend horizontalAlign.
     *
     * @param string $legendHorizontalAlign
     *
     * @return this
     */
    public function setLegendHorizontalAlign($legendHorizontalAlign) :Charts
    {
        $this->legendHorizontalAlign = $legendHorizontalAlign;

        $this->setOption([
            'legend' => [
                'horizontalAlign' => $legendHorizontalAlign,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getLegendHorizontalAlign()
    {
        return $this->legendHorizontalAlign;
    }

    /**
     * Set the legend floating.
     *
     * @param boolean $legendShow
     *
     * @return this
     */
    public function setLegendFloating($legendFloating) :Charts
    {
        $this->legendFloating = $legendFloating;

        $this->setOption([
            'legend' => [
                'floating' => $legendFloating,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendFloating()
    {
        return $this->legendFloating;
    }

    /**
     * Set the legend fontSize.
     *
     * @param string $legendFontSize
     *
     * @return this
     */
    public function setLegendFontSize($legendFontSize) :Charts
    {
        $this->legendFontSize = $legendFontSize;

        $this->setOption([
            'legend' => [
                'fontSize' => $legendFontSize,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendFontSize()
    {
        return $this->legendFontSize;
    }

    /**
     * Set the legend fontFamily.
     *
     * @param string $legendFontFamily
     *
     * @return this
     */
    public function setLegendFontFamily($legendFontFamily) :Charts
    {
        $this->legendFontFamily = $legendFontFamily;

        $this->setOption([
            'legend' => [
                'fontFamily' => $legendFontFamily,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getLegendFontFamily()
    {
        return $this->legendFontFamily;
    }

    /**
     * Set the legend fontWeight.
     *
     * @param string $legendFontWeight
     *
     * @return this
     */
    public function setLegendFontWeight($legendFontWeight) :Charts
    {
        $this->legendFontWeight = $legendFontWeight;

        $this->setOption([
            'legend' => [
                'fontWeight' => $legendFontWeight,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendFontWeight()
    {
        return $this->legendFontWeight;
    }

    /**
     * Set the legend formatter.
     *
     * @param string $legendFormatter
     *
     * @return this
     */
    public function setLegendFormatter($legendFormatter) :Charts
    {
        $this->legendFormatter = $legendFormatter;

        $this->setOption([
            'legend' => [
                'formatter' => $legendFormatter,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendFormatter()
    {
        return $this->legendFormatter;
    }

    /**
     * Set the legend inverseOrder.
     *
     * @param string $legendInverseOrder
     *
     * @return this
     */
    public function setLegendInverseOrder($legendInverseOrder) :Charts
    {
        $this->legendInverseOrder = $legendInverseOrder;

        $this->setOption([
            'legend' => [
                'inverseOrder' => $legendInverseOrder,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendInverseOrder()
    {
        return $this->legendInverseOrder;
    }

    /**
     * Set the legend width.
     *
     * @param string $legendWidth
     *
     * @return this
     */
    public function setLegendWidth($legendWidth) :Charts
    {
        $this->legendWidth = $legendWidth;

        $this->setOption([
            'legend' => [
                'width' => $legendWidth,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendWidth()
    {
        return $this->legendWidth;
    }

    /**
     * Set the legend height.
     *
     * @param string $legendHeight
     *
     * @return this
     */
    public function setLegendHeight($legendHeight) :Charts
    {
        $this->legendHeight = $legendHeight;

        $this->setOption([
            'legend' => [
                'height' => $legendHeight,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendHeight()
    {
        return $this->legendHeight;
    }

    /**
     * Set the legend tooltipHoverFormatter.
     *
     * @param string $legendTooltipHoverFormatter
     *
     * @return this
     */
    public function setLegendTooltipHoverFormatter($legendTooltipHoverFormatter) :Charts
    {
        $this->legendTooltipHoverFormatter = $legendTooltipHoverFormatter;

        $this->setOption([
            'legend' => [
                'tooltipHoverFormatter' => $legendTooltipHoverFormatter,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendTooltipHoverFormatter()
    {
        return $this->legendTooltipHoverFormatter;
    }

    /**
     * Set the legend customLegendItems.
     *
     * @param string $legendShow
     *
     * @return this
     */
    public function setLegendCustomLegendItems($legendCustomLegendItems) :Charts
    {
        $this->legendCustomLegendItems = $legendCustomLegendItems;

        $this->setOption([
            'legend' => [
                'customLegendItems' => $legendCustomLegendItems,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendCustomLegendItems()
    {
        return $this->legendCustomLegendItems;
    }

    /**
     * Set the legend offsetX.
     *
     * @param string $legendShow
     *
     * @return this
     */
    public function setLegendOffsetX($legendOffsetX) :Charts
    {
        $this->legendOffsetX = $legendOffsetX;

        $this->setOption([
            'legend' => [
                'offsetX' => $legendOffsetX,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendOffsetX()
    {
        return $this->legendOffsetX;
    }

    /**
     * Set the legend offsetY.
     *
     * @param string $legendOffsetY
     *
     * @return this
     */
    public function setLegendOffsetY($legendOffsetY) :Charts
    {
        $this->legendOffsetY = $legendOffsetY;

        $this->setOption([
            'legend' => [
                'offsetY' => $legendOffsetY,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendOffsetY()
    {
        return $this->legendOffsetY;
    }

    /**
     * Set the legend labels.
     *
     * @param string $legendLabels
     *
     * @return this
     */
    public function setLegendLabels($legendLabels) :Charts
    {
        $this->legendLabels = $legendLabels;

        $this->setOption([
            'legend' => [
                'labels' => $legendLabels,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendLabels()
    {
        return $this->legendLabels;
    }

    /**
     * Set the legend markers.
     *
     * @param string $legendMarkers
     *
     * @return this
     */
    public function setLegendMarkers($legendMarkers) :Charts
    {
        $this->legendMarkers = $legendMarkers;

        $this->setOption([
            'legend' => [
                'markers' => $legendMarkers,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendMarkers()
    {
        return $this->legendMarkers;
    }

    /**
     * Set the legend itemMargin.
     *
     * @param string $legendItemMargin
     *
     * @return this
     */
    public function setLegendItemMargin($legendItemMargin) :Charts
    {
        $this->legendItemMargin = $legendItemMargin;

        $this->setOption([
            'legend' => [
                'itemMargin' => $legendItemMargin,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendItemMargin()
    {
        return $this->legendItemMargin;
    }

    /**
     * Set the legend onItemClick.
     *
     * @param string $legendOnItemClick
     *
     * @return this
     */
    public function setLegendOnItemClick($legendOnItemClick) :Charts
    {
        $this->legendOnItemClick = $legendOnItemClick;

        $this->setOption([
            'legend' => [
                'onItemClick' => $legendOnItemClick,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendOnItemClick()
    {
        return $this->legendOnItemClick;
    }

    /**
     * Set the legend onItemHover.
     *
     * @param string $legendOnItemHover
     *
     * @return this
     */
    public function setLegendOnItemHover($legendOnItemHover) :Charts
    {
        $this->legendOnItemHover = $legendOnItemHover;

        $this->setOption([
            'legend' => [
                'onItemHover' => $legendOnItemHover,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLegendOnItemHover()
    {
        return $this->legendOnItemHover;
    }
}
