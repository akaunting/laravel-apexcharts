<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Stroke
{
    /**
     * Stores the show of the stroke.
     *
     * @var boolean
     */
    public $strokeShow = true;

    /**
     * Stores the curve of the stroke.
     *
     * @var string|arrat
     */
    public $strokeCurve = 'smooth';

    /**
     * Stores the lineCap of the stroke.
     *
     * @var string
     */
    public $strokeLineCap = 'butt';

    /**
     * Stores the colors of the stroke.
     *
     * @var string
     */
    public $strokeColors = [];

    /**
     * Stores the width of the stroke.
     *
     * @var int|array
     */
    public $strokeWidth = 2;

    /**
     * Stores the dashArray of the stroke.
     *
     * @var int|array
     */
    public $strokeDashArray = 0;

    /**
     * Set the stroke show.
     *
     * @param boolean $strokeShow
     *
     * @return this
     */
    public function setStrokeShow($strokeShow) :Charts
    {
        $this->strokeShow = $strokeShow;

        $this->setOption([
            'stroke' => [
                'show' => $strokeShow,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getStrokeShow()
    {
        return $this->strokeShow;
    }

    /**
     * Set the stroke curve.
     *
     * @param string $strokeCurve
     *
     * @return this
     */
    public function setStrokeCurve($strokeCurve) :Charts
    {
        $this->strokeCurve = $strokeCurve;

        $this->setOption([
            'stroke' => [
                'curve' => $strokeCurve,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getStrokeCurve()
    {
        return $this->strokeCurve;
    }

    /**
     * Set the stroke lineCap.
     *
     * @param string $strokeLineCap
     *
     * @return this
     */
    public function setStrokeLineCap($strokeLineCap) :Charts
    {
        $this->strokeLineCap = $strokeLineCap;

        $this->setOption([
            'stroke' => [
                'lineCap' => $strokeLineCap,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getStrokeLineCap()
    {
        return $this->strokeLineCap;
    }

    /**
     * Set the stroke colors.
     *
     * @param array $strokeColors
     *
     * @return this
     */
    public function setStrokeColors($strokeColors) :Charts
    {
        $this->strokeColors = $strokeColors;

        $this->setOption([
            'stroke' => [
                'colors' => $strokeColors,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getStrokeColors()
    {
        return $this->strokeColors;
    }

    /**
     * Set the stroke width.
     *
     * @param string|array $strokeWidth
     *
     * @return this
     */
    public function setStrokeWidth($strokeWidth) :Charts
    {
        $this->strokeWidth = $strokeWidth;

        $this->setOption([
            'stroke' => [
                'width' => $strokeWidth,
            ],
        ]);

        return $this;
    }

    /**
     * @return string|array
     */
    public function getStrokeWidth()
    {
        return $this->strokeWidth;
    }

    /**
     * Set the stroke dashArray.
     *
     * @param int|array $strokeDashArray
     *
     * @return this
     */
    public function setStrokeDashArray($strokeDashArray) :Charts
    {
        $this->strokeDashArray = $strokeDashArray;

        $this->setOption([
            'stroke' => [
                'dashArray' => $strokeDashArray,
            ],
        ]);

        return $this;
    }

    /**
     * @return int|array
     */
    public function getStrokeDashArray()
    {
        return $this->strokeDashArray;
    }
}
