<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait DataLabels
{
    /**
     * Stores the enabled of the dataLabels.
     *
     * @var boolean
     */
    public $dataLabelsEnabled = true;

    /**
     * Stores the enabledOnSeries of the dataLabels.
     *
     * @var array|int
     */
    public $dataLabelsEnabledOnSeries;

    /**
     * Stores the formatter of the dataLabels.
     *
     * @var function
     */
    public $dataLabelsFormatter;

    /**
     * Stores the textAnchor of the dataLabels.
     *
     * @var string
     */
    public $dataLabelsTextAnchor = 'middle';

    /**
     * Stores the distributed of the dataLabels.
     *
     * @var boolean
     */
    public $dataLabelsDistributed = false;

    /**
     * Stores the offsetX of the dataLabels.
     *
     * @var int
     */
    public $dataLabelsOffsetX = 0;

    /**
     * Stores the offsetY of the dataLabels.
     *
     * @var int
     */
    public $dataLabelsOffsetY = 0;

    /**
     * Stores the style of the dataLabels.
     *
     * @var array
     */
    public $dataLabelsStyle = [];

    /**
     * Stores the background of the dataLabels.
     *
     * @var array
     */
    public $dataLabelsBackground = [];

    /**
     * Stores the dropShadow of the dataLabels.
     *
     * @var array
     */
    public $dataLabelsDropShadow = [];

    /**
     * Set the dataLabels show.
     *
     * @param string $dataLabelsEnabled
     *
     * @return this
     */
    public function setDataLabelsEnabled($dataLabelsEnabled) :Charts
    {
        $this->dataLabelsEnabled = $dataLabelsEnabled;

        $this->setOption([
            'dataLabels' => [
                'enabled' => $dataLabelsEnabled,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDataLabelsEnabled()
    {
        return $this->dataLabelsEnabled;
    }

    /**
     * Set the dataLabels enabledOnSeries.
     *
     * @param array|int $dataLabelsEnabledOnSeries
     *
     * @return this
     */
    public function setDataLabelsEnabledOnSeries($dataLabelsEnabledOnSeries) :Charts
    {
        $this->dataLabelsEnabledOnSeries = $dataLabelsEnabledOnSeries;

        $this->setOption([
            'dataLabels' => [
                'enabledOnSeries' => $dataLabelsEnabledOnSeries,
            ],
        ]);

        return $this;
    }

    /**
     * @return array|int
     */
    public function getDataLabelsEnabledOnSeries()
    {
        return $this->dataLabelsEnabledOnSeries;
    }

    /**
     * Set the dataLabels formatter.
     *
     * @param function $dataLabelsFormatter
     *
     * @return this
     */
    public function setDataLabelsFormatter($dataLabelsFormatter) :Charts
    {
        $this->dataLabelsFormatter = $dataLabelsFormatter;

        $this->setOption([
            'dataLabels' => [
                'formatter' => $dataLabelsFormatter,
            ],
        ]);

        return $this;
    }

    /**
     * @return function
     */
    public function getDataLabelsFormatter()
    {
        return $this->dataLabelsFormatter;
    }

    /**
     * Set the dataLabels textAnchor.
     *
     * @param string $dataLabelsTextAnchor
     *
     * @return this
     */
    public function setDataLabelsTextAnchor($dataLabelsTextAnchor) :Charts
    {
        $this->dataLabelsTextAnchor = $dataLabelsTextAnchor;

        $this->setOption([
            'dataLabels' => [
                'textAnchor' => $dataLabelsTextAnchor,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getDataLabelsTextAnchor()
    {
        return $this->dataLabelsTextAnchor;
    }

    /**
     * Set the dataLabels distributed.
     *
     * @param boolean $dataLabelsDistributed
     *
     * @return this
     */
    public function setDataLabelsDistributed($dataLabelsDistributed) :Charts
    {
        $this->dataLabelsDistributed = $dataLabelsDistributed;

        $this->setOption([
            'dataLabels' => [
                'distributed' => $dataLabelsDistributed,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDataLabelsDistributed()
    {
        return $this->dataLabelsDistributed;
    }

    /**
     * Set the dataLabels offsetX.
     *
     * @param int $dataLabelsOffsetX
     *
     * @return this
     */
    public function setDataLabelsOffsetX($dataLabelsOffsetX) :Charts
    {
        $this->dataLabelsOffsetX = $dataLabelsOffsetX;

        $this->setOption([
            'dataLabels' => [
                'offsetX' => $dataLabelsOffsetX,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDataLabelsOffsetX()
    {
        return $this->dataLabelsOffsetX;
    }

    /**
     * Set the dataLabels offsetY.
     *
     * @param int $dataLabelsOffsetY
     *
     * @return this
     */
    public function setDataLabelsOffsetY($dataLabelsOffsetY) :Charts
    {
        $this->dataLabelsOffsetY = $dataLabelsOffsetY;

        $this->setOption([
            'dataLabels' => [
                'offsetY' => $dataLabelsOffsetY,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getDataLabelsOffsetY()
    {
        return $this->dataLabelsOffsetY;
    }

    /**
     * Set the dataLabels style.
     *
     * @param array $dataLabelsStyle
     *
     * @return this
     */
    public function setDataLabelsStyle($dataLabelsStyle) :Charts
    {
        $this->dataLabelsStyle = $dataLabelsStyle;

        $this->setOption([
            'dataLabels' => [
                'style' => $dataLabelsStyle,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getDataLabelsStyle()
    {
        return $this->dataLabelsStyle;
    }

    /**
     * Set the dataLabels background.
     *
     * @param array $dataLabelsBackground
     *
     * @return this
     */
    public function setDataLabelsBackground($dataLabelsBackground) :Charts
    {
        $this->dataLabelsBackground = $dataLabelsBackground;

        $this->setOption([
            'dataLabels' => [
                'enabled' => $dataLabelsBackground,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getDataLabelsBackground()
    {
        return $this->dataLabelsBackground;
    }

    /**
     * Set the dataLabels dropShadow.
     *
     * @param string $dataLabelsDropShadow
     *
     * @return this
     */
    public function setDataLabelsDropShadow($dataLabelsDropShadow) :Charts
    {
        $this->dataLabelsDropShadow = $dataLabelsDropShadow;

        $this->setOption([
            'dataLabels' => [
                'dropShadow' => $dataLabelsDropShadow,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDataLabelsDropShadow()
    {
        return $this->dataLabelsDropShadow;
    }
}
