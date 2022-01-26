<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Chart
{
    /**
     * Stores the animations of the chart.
     *
     * @var array
     */
    public $animations = [];

    /**
     * Stores the animations of the chart.
     *
     * @var string
     */
    public $background = '#fff';

    /**
     * Stores the animations of the chart.
     *
     * @var array
     */
    public $brush = [];

    /**
     * Stores the defaultLocale of the chart.
     *
     * @var string
     */
    public $defaultLocale = 'en';

    /**
     * Stores the dropShadow of the chart.
     *
     * @var array
     */
    public $dropShadow = [];

    /**
     * Stores the fontFamily of the chart.
     *
     * @var string
     */
    public $fontFamily = '';

    /**
     * Stores the foreColor of the chart.
     *
     * @var string
     */
    public $foreColor = '';

    /**
     * Stores the group of the chart.
     *
     * @var string
     */
    public $group = '';

    /**
     * Stores the events of the chart.
     *
     * @var array
     */
    public $events = [];

    /**
     * Stores the height of the chart.
     *
     * @var int
     */
    public $height = 400;

    /**
     * Stores the locales of the chart.
     *
     * @var array
     */
    public $locales = [];

    /**
     * Stores the offsetX of the chart.
     *
     * @var int
     */
    public $offsetX = 0;

    /**
     * Stores the offsetY of the chart.
     *
     * @var int
     */
    public $offsetY = 0;

    /**
     * Stores the parentHeightOffset of the chart.
     *
     * @var int
     */
    public $parentHeightOffset = 15;

    /**
     * Stores the redrawOnParentResize of the chart.
     *
     * @var booelan
     */
    public $redrawOnParentResize = true;

    /**
     * Stores the redrawOnWindowResize of the chart.
     *
     * @var booelan
     */
    public $redrawOnWindowResize = true;

    /**
     * Stores the selection of the chart.
     *
     * @var array
     */
    public $selection = [];

    /**
     * Stores the sparkline of the chart.
     *
     * @var array
     */
    public $sparkline = [];

    /**
     * Stores the stacked of the chart.
     *
     * @var string
     */
    public $stacked = false;

    /**
     * Stores the stackType of the chart.
     *
     * @var string
     */
    public $stackType = 'normal';

    /**
     * Stores the toolbar options.
     *
     * @var array
     */
    public $toolbar = [];

    /**
     * Stores the width of the chart.
     *
     * @var int|string
     */
    public $width = null;

    /**
     * Stores the zoom options.
     *
     * @var array
     */
    public $zoom = [];

    /**
     * Set the chart animations.
     *
     * @param array $animations
     *
     * @return this
     */
    public function setAnimations(int $animations) :Charts
    {
        $this->animations = $animations;

        $this->setOption([
            'chart' => [
                'animations' => $animations,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getAnimations()
    {
        return $this->animations;
    }

    /**
     * Set the chart background.
     *
     * @param array $background
     *
     * @return this
     */
    public function setBackground(string $background) :Charts
    {
        $this->background = $background;

        $this->setOption([
            'chart' => [
                'background' => $background,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set the chart brush.
     *
     * @param array $brush
     *
     * @return this
     */
    public function setBrush($brush) :Charts
    {
        $this->brush = $brush;

        $this->setOption([
            'chart' => [
                'brush' => $brush,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getBrush()
    {
        return $this->brush;
    }

    /**
     * Set the chart defaultLocale.
     *
     * @param array $defaultLocale
     *
     * @return this
     */
    public function setDefaultLocale($defaultLocale) :Charts
    {
        $this->defaultLocale = $defaultLocale;

        $this->setOption([
            'chart' => [
                'defaultLocale' => $defaultLocale,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * Set the chart dropShadow.
     *
     * @param array $dropShadow
     *
     * @return this
     */
    public function setDropShadow($dropShadow) :Charts
    {
        $this->dropShadow = $dropShadow;

        $this->setOption([
            'chart' => [
                'dropShadow' => $dropShadow,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getDropShadow()
    {
        return $this->dropShadow;
    }

    /**
     * Set the chart fontFamily.
     *
     * @param string $fontFamily
     *
     * @return this
     */
    public function setFontFamily(string $fontFamily) :Charts
    {
        $this->fontFamily = $fontFamily;

        $this->setOption([
            'chart' => [
                'fontFamily' => $fontFamily,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getFontFamily()
    {
        return $this->fontFamily;
    }

    /**
     * Set the chart foreColor.
     *
     * @param string $foreColor
     *
     * @return this
     */
    public function setForeColor(string $foreColor) :Charts
    {
        $this->foreColor = $foreColor;

        $this->setOption([
            'chart' => [
                'foreColor' => $foreColor,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getForeColor()
    {
        return $this->foreColor;
    }

    /**
     * Set the chart group.
     *
     * @param int $group
     *
     * @return this
     */
    public function setGroup(int $group) :Charts
    {
        $this->group = $group;

        $this->setOption([
            'chart' => [
                'group' => $group,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set the chart events.
     *
     * @param int $events
     *
     * @return this
     */
    public function setEvents(int $events) :Charts
    {
        $this->events = $events;

        $this->setOption([
            'chart' => [
                'events' => $events,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set the chart height.
     *
     * @param int $height
     *
     * @return this
     */
    public function setHeight(int $height) :Charts
    {
        $this->height = $height;

        $this->setOption([
            'chart' => [
                'height' => $height,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the chart locales.
     *
     * @param array $locales
     *
     * @return this
     */
    public function setLocales($locales) :Charts
    {
        $this->locales = $locales;

        $this->setOption([
            'chart' => [
                'locales' => $locales,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * Set the chart offsetX.
     *
     * @param int $offsetX
     *
     * @return this
     */
    public function setOffsetX(int $offsetX) :Charts
    {
        $this->offsetX = $offsetX;

        $this->setOption([
            'chart' => [
                'offsetX' => $offsetX,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getOffsetX()
    {
        return $this->offsetX;
    }

    /**
     * Set the chart offsetY.
     *
     * @param int $offsetY
     *
     * @return this
     */
    public function setOffsetY(int $offsetY) :Charts
    {
        $this->offsetY = $offsetY;

        $this->setOption([
            'chart' => [
                'offsetY' => $offsetY,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getOffsetY()
    {
        return $this->offsetY;
    }

    /**
     * Set the chart parentHeightOffset.
     *
     * @param string $parentHeightOffset
     *
     * @return this
     */
    public function setParentHeightOffset(int $parentHeightOffset) :Charts
    {
        $this->parentHeightOffset = $parentHeightOffset;

        $this->setOption([
            'chart' => [
                'parentHeightOffset' => $parentHeightOffset,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getParentHeightOffset()
    {
        return $this->parentHeightOffset;
    }

    /**
     * Set the chart redrawOnParentResize.
     *
     * @param boolean $redrawOnParentResize
     *
     * @return this
     */
    public function setRedrawOnParentResize($redrawOnParentResize) :Charts
    {
        $this->redrawOnParentResize = $redrawOnParentResize;

        $this->setOption([
            'chart' => [
                'redrawOnParentResize' => $redrawOnParentResize,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getRedrawOnParentResize()
    {
        return $this->redrawOnParentResize;
    }

    /**
     * Set the chart redrawOnWindowResize.
     *
     * @param string $redrawOnWindowResize
     *
     * @return this
     */
    public function setRedrawOnWindowResize($redrawOnWindowResize) :Charts
    {
        $this->redrawOnWindowResize = $redrawOnWindowResize;

        $this->setOption([
            'chart' => [
                'redrawOnWindowResize' => $redrawOnWindowResize,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getRedrawOnWindowResize()
    {
        return $this->redrawOnWindowResize;
    }

    /**
     * Set the chart selection.
     *
     * @param string $selection
     *
     * @return this
     */
    public function setSelection($selection) :Charts
    {
        $this->selection = $selection;

        $this->setOption([
            'chart' => [
                'selection' => $selection,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getSelection()
    {
        return $this->selection;
    }

    /**
     * Set the chart sparkline.
     *
     * @param string $sparkline
     *
     * @return this
     */
    public function setSparkline($sparkline) :Charts
    {
        $this->sparkline = $sparkline;

        $this->setOption([
            'chart' => [
                'sparkline' => $sparkline,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getSparkline()
    {
        return $this->sparkline;
    }

    /**
     * Set the chart stacked.
     *
     * @param string $stacked
     *
     * @return this
     */
    public function setStacked(string $stacked) :Charts
    {
        $this->stacked = $stacked;

        $this->setOption([
            'chart' => [
                'stacked' => $stacked,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getStacked()
    {
        return $this->stacked;
    }

    /**
     * Set the chart stackType.
     *
     * @param string $stackType
     *
     * @return this
     */
    public function setStackType(string $stackType) :Charts
    {
        $this->stackType = $stackType;

        $this->setOption([
            'chart' => [
                'stackType' => $stackType,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getStackType()
    {
        return $this->stackType;
    }

    /**
     * Set the chart width.
     *
     * @param array $toolbar
     *
     * @return this
     */
    public function setToolbar(array $toolbar) :Charts
    {
        $this->toolbar = $toolbar;

        $this->setOption([
            'chart' => [
                'toolbar' => $toolbar,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getToolbar()
    {
        return $this->toolbar;
    }

    /**
     * Set the chart width.
     *
     * @param int|string $width
     *
     * @return this
     */
    public function setWidth($width) :Charts
    {
        $this->width = $width;

        $this->setOption([
            'chart' => [
                'width' => $width,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the chart width.
     *
     * @param array $zoom
     *
     * @return this
     */
    public function setZoom(array $zoom) :Charts
    {
        $this->zoom = $zoom;

        $this->setOption([
            'chart' => [
                'zoom' => $zoom,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getZoom()
    {
        return $this->zoom;
    }
}
