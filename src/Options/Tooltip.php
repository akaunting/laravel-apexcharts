<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Tooltip
{
    /**
     * Stores the enabled of the tooltip.
     *
     * @var boolean
     */
    public $tooltipEnabled = true;

    /**
     * Stores the enabled of the tooltip.
     *
     * @var array
     */
    public $tooltipEnabledOnSeries = [];

    /**
     * Stores the shared of the tooltip.
     *
     * @var boolean
     */
    public $tooltipShared = true;

    /**
     * Stores the followCursor of the tooltip.
     *
     * @var boolean
     */
    public $tooltipFollowCursor = false;

    /**
     * Stores the intersect of the tooltip.
     *
     * @var boolean
     */
    public $tooltipIntersect = false;

    /**
     * Stores the inverseOrder of the tooltip.
     *
     * @var boolean
     */
    public $tooltipInverseOrder = false;

    /**
     * Stores the custom of the tooltip.
     *
     * @var function
     */
    public $tooltipCustom;

    /**
     * Stores the fillSeriesColor of the tooltip.
     *
     * @var boolean
     */
    public $tooltipFillSeriesColor = false;

    /**
     * Stores the theme of the tooltip.
     *
     * @var string
     */
    public $tooltipTheme = false;

    /**
     * Stores the style of the tooltip.
     *
     * @var array
     */
    public $tooltipStyle = [];

    /**
     * Stores the onDatasetHover of the tooltip.
     *
     * @var array
     */
    public $tooltipOnDatasetHover = [];

    /**
     * Stores the x of the tooltip.
     *
     * @var array
     */
    public $tooltipX = [];

    /**
     * Stores the y of the tooltip.
     *
     * @var array
     */
    public $tooltipY = [];

    /**
     * Stores the z of the tooltip.
     *
     * @var array
     */
    public $tooltipZ = [];

    /**
     * Stores the marker of the tooltip.
     *
     * @var array
     */
    public $tooltipMarker = [];

    /**
     * Stores the items of the tooltip.
     *
     * @var array
     */
    public $tooltipItems = [];

    /**
     * Stores the fixed of the tooltip.
     *
     * @var array
     */
    public $tooltipFixed = [];

    /**
     * Set the enabled tooltip.
     *
     * @param string $tooltipEnabled
     *
     * @return this
     */
    public function setTooltipEnabled($tooltipEnabled) :Charts
    {
        $this->tooltipEnabled = $tooltipEnabled;

        $this->setOption([
            'tooltip' => [
                'enabled' => $tooltipEnabled,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipEnabled()
    {
        return $this->tooltipEnabled;
    }

    /**
     * Set the enabledOnSeries tooltip.
     *
     * @param string $tooltipEnabledOnSeries
     *
     * @return this
     */
    public function setTooltipEnabledOnSeries($tooltipEnabledOnSeries) :Charts
    {
        $this->tooltipEnabledOnSeries = $tooltipEnabledOnSeries;

        $this->setOption([
            'tooltip' => [
                'enabledOnSeries' => $tooltipEnabledOnSeries,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipEnabledOnSeries()
    {
        return $this->tooltipEnabledOnSeries;
    }

    /**
     * Set the shared tooltip.
     *
     * @param string $tooltipShared
     *
     * @return this
     */
    public function setTooltipShared($tooltipShared) :Charts
    {
        $this->tooltipShared = $tooltipShared;

        $this->setOption([
            'tooltip' => [
                'shared' => $tooltipShared,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipShared()
    {
        return $this->tooltipShared;
    }

    /**
     * Set the followCursor tooltip.
     *
     * @param string $tooltipFollowCursor
     *
     * @return this
     */
    public function setTooltipFollowCursor($tooltipFollowCursor) :Charts
    {
        $this->tooltipFollowCursor = $tooltipFollowCursor;

        $this->setOption([
            'tooltip' => [
                'followCursor' => $tooltipFollowCursor,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipFollowCursor()
    {
        return $this->tooltipFollowCursor;
    }

    /**
     * Set the intersect tooltip.
     *
     * @param string $tooltipIntersect
     *
     * @return this
     */
    public function setTooltipIntersect($tooltipIntersect) :Charts
    {
        $this->tooltipIntersect = $tooltipIntersect;

        $this->setOption([
            'tooltip' => [
                'intersect' => $tooltipIntersect,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipIntersect()
    {
        return $this->tooltipIntersect;
    }

    /**
     * Set the inverseOrder tooltip.
     *
     * @param string $tooltipInverseOrder
     *
     * @return this
     */
    public function setTooltipInverseOrder($tooltipInverseOrder) :Charts
    {
        $this->tooltipInverseOrder = $tooltipInverseOrder;

        $this->setOption([
            'tooltip' => [
                'inverseOrder' => $tooltipInverseOrder,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipInverseOrder()
    {
        return $this->tooltipInverseOrder;
    }

    /**
     * Set the custom tooltip.
     *
     * @param string $tooltipCustom
     *
     * @return this
     */
    public function setTooltipCustom($tooltipCustom) :Charts
    {
        $this->tooltipCustom = $tooltipCustom;

        $this->setOption([
            'tooltip' => [
                'custom' => $tooltipCustom,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipCustom()
    {
        return $this->tooltipCustom;
    }

    /**
     * Set the fillSeriesColor tooltip.
     *
     * @param string $tooltipFillSeriesColor
     *
     * @return this
     */
    public function setTooltipFillSeriesColor($tooltipFillSeriesColor) :Charts
    {
        $this->tooltipFillSeriesColor = $tooltipFillSeriesColor;

        $this->setOption([
            'tooltip' => [
                'fillSeriesColor' => $tooltipFillSeriesColor,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipFillSeriesColor()
    {
        return $this->tooltipFillSeriesColor;
    }

    /**
     * Set the theme tooltip.
     *
     * @param string $tooltipTheme
     *
     * @return this
     */
    public function setTooltipTheme($tooltipTheme) :Charts
    {
        $this->tooltipTheme = $tooltipTheme;

        $this->setOption([
            'tooltip' => [
                'theme' => $tooltipTheme,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipTheme()
    {
        return $this->tooltipTheme;
    }

    /**
     * Set the style tooltip.
     *
     * @param string $tooltipStyle
     *
     * @return this
     */
    public function setTooltipStyle($tooltipStyle) :Charts
    {
        $this->tooltipStyle = $tooltipStyle;

        $this->setOption([
            'tooltip' => [
                'style' => $tooltipStyle,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipStyle()
    {
        return $this->tooltipStyle;
    }

    /**
     * Set the onDatasetHover tooltip.
     *
     * @param string $tooltipOnDatasetHover
     *
     * @return this
     */
    public function setTooltipOnDatasetHover($tooltipOnDatasetHover) :Charts
    {
        $this->tooltipOnDatasetHover = $tooltipOnDatasetHover;

        $this->setOption([
            'tooltip' => [
                'onDatasetHover' => $tooltipOnDatasetHover,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipOnDatasetHover()
    {
        return $this->tooltipOnDatasetHover;
    }

    /**
     * Set the x tooltip.
     *
     * @param string $tooltipX
     *
     * @return this
     */
    public function setTooltipX($tooltipX) :Charts
    {
        $this->tooltipX = $tooltipX;

        $this->setOption([
            'tooltip' => [
                'x' => $tooltipX,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipX()
    {
        return $this->tooltipX;
    }

    /**
     * Set the y tooltip.
     *
     * @param string $tooltipY
     *
     * @return this
     */
    public function setTooltipY($tooltipY) :Charts
    {
        $this->tooltipY = $tooltipY;

        $this->setOption([
            'tooltip' => [
                'y' => $tooltipY,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipY()
    {
        return $this->tooltipY;
    }

    /**
     * Set the z tooltip.
     *
     * @param string $tooltipZ
     *
     * @return this
     */
    public function setTooltipZ($tooltipZ) :Charts
    {
        $this->tooltipZ = $tooltipZ;

        $this->setOption([
            'tooltip' => [
                'z' => $tooltipZ,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipZ()
    {
        return $this->tooltipZ;
    }

    /**
     * Set the marker tooltip.
     *
     * @param string $tooltipShared
     *
     * @return this
     */
    public function setTooltipMarker($tooltipMarker) :Charts
    {
        $this->tooltipMarker = $tooltipMarker;

        $this->setOption([
            'tooltip' => [
                'marker' => $tooltipMarker,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipMarker()
    {
        return $this->tooltipMarker;
    }

    /**
     * Set the items tooltip.
     *
     * @param string $tooltipItems
     *
     * @return this
     */
    public function setTooltipItems($tooltipItems) :Charts
    {
        $this->tooltipItems = $tooltipItems;

        $this->setOption([
            'tooltip' => [
                'items' => $tooltipItems,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipItems()
    {
        return $this->tooltipItems;
    }

    /**
     * Set the fixed tooltip.
     *
     * @param string $tooltipFixed
     *
     * @return this
     */
    public function setTooltipFixed($tooltipFixed) :Charts
    {
        $this->tooltipFixed = $tooltipFixed;

        $this->setOption([
            'tooltip' => [
                'fixed' => $tooltipFixed,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTooltipFixed()
    {
        return $this->tooltipFixed;
    }
}
