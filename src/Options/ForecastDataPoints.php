<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait ForecastDataPoints
{
    /**
     * Stores the count of the forecastDataPoints.
     *
     * @var int
     */
    public $forecastDataPointsCount = 0;

    /**
     * Stores the fillOpacity of the forecastDataPoints.
     *
     * @var int
     */
    public $forecastDataPointsFillOpacity = 0.5;

    /**
     * Stores the strokeWidth of the forecastDataPoints.
     *
     * @var int
     */
    public $forecastDataPointsStrokeWidth;

    /**
     * Stores the dashArray of the forecastDataPoints.
     *
     * @var int
     */
    public $forecastDataPointsDashArray = 4;

    /**
     * Set the forecastDataPoints count.
     *
     * @param int $forecastDataPointsCount
     *
     * @return this
     */
    public function setForecastDataPointsCount($forecastDataPointsCount) :Charts
    {
        $this->forecastDataPointsCount = $forecastDataPointsCount;

        $this->setOption([
            'forecastDataPoints' => [
                'count' => $forecastDataPointsCount,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getForecastDataPointsCount()
    {
        return $this->forecastDataPointsCount;
    }

    /**
     * Set the forecastDataPoints fillOpacity.
     *
     * @param int $forecastDataPointsFillOpacity
     *
     * @return this
     */
    public function setForecastDataPointsFillOpacity($forecastDataPointsFillOpacity) :Charts
    {
        $this->forecastDataPointsFillOpacity = $forecastDataPointsFillOpacity;

        $this->setOption([
            'forecastDataPoints' => [
                'fillOpacity' => $forecastDataPointsFillOpacity,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getForecastDataPointsFillOpacity()
    {
        return $this->forecastDataPointsFillOpacity;
    }

    /**
     * Set the forecastDataPoints strokeWidth.
     *
     * @param int $forecastDataPointsStrokeWidth
     *
     * @return this
     */
    public function setForecastDataPointsStrokeWidth($forecastDataPointsStrokeWidth) :Charts
    {
        $this->forecastDataPointsStrokeWidth = $forecastDataPointsStrokeWidth;

        $this->setOption([
            'forecastDataPoints' => [
                'strokeWidth' => $forecastDataPointsStrokeWidth,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getForecastDataPointsStrokeWidth()
    {
        return $this->forecastDataPointsStrokeWidth;
    }

    /**
     * Set the forecastDataPoints dashArray.
     *
     * @param int $forecastDataPointsDashArray
     *
     * @return this
     */
    public function setForecastDataPointsDashArray($forecastDataPointsDashArray) :Charts
    {
        $this->forecastDataPointsDashArray = $forecastDataPointsDashArray;

        $this->setOption([
            'forecastDataPoints' => [
                'dashArray' => $forecastDataPointsDashArray,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getForecastDataPointsDashArray()
    {
        return $this->forecastDataPointsDashArray;
    }
}
