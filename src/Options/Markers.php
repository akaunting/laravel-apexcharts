<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Markers
{
    /**
     * Stores the size of the markers.
     *
     * @var int
     */
    public $markersSize = 4;

    /**
     * Stores the colors of the markers.
     *
     * @var array
     */
    public $markersColors = [];

    /**
     * Stores the strokeColors of the markers.
     *
     * @var string|array
     */
    public $markersStrokeColors = '#fff';

    /**
     * Stores the strokeWidth of the markers.
     *
     * @var int|array
     */
    public $markersStrokeWidth = 2;

    /**
     * Stores the strokeOpacity of the markers.
     *
     * @var int|array
     */
    public $markersStrokeOpacity = 0.9;

    /**
     * Stores the strokeDashArray of the markers.
     *
     * @var int|array
     */
    public $markersStrokeDashArray = 0;

    /**
     * Stores the fillOpacity of the markers.
     *
     * @var int|array
     */
    public $markersFillOpacity = 1;

    /**
     * Stores the discrete of the markers.
     *
     * @var array
     */
    public $markersDiscrete = [];

    /**
     * Stores the shape of the markers.
     *
     * @var string
     */
    public $markersShape = 'circle';

    /**
     * Stores the radius of the markers.
     *
     * @var int
     */
    public $markersRadius = 2;

    /**
     * Stores the offsetX of the markers.
     *
     * @var int
     */
    public $markersOffsetX = 0;

    /**
     * Stores the offsetY of the markers.
     *
     * @var int
     */
    public $markersOffsetY = 0;

    /**
     * Stores the onClick of the markers.
     *
     * @var function
     */
    public $markersOnClick;

    /**
     * Stores the onDblClick of the markers.
     *
     * @var function
     */
    public $markersOnDblClick;

    /**
     * Stores the showNullDataPoints of the markers.
     *
     * @var boolean
     */
    public $markersShowNullDataPoints = true;

    /**
     * Stores the hover of the markers.
     *
     * @var array
     */
    public $markersHover = [
        'size' => '',
        'sizeOffset' => 3,
    ];

    /**
     * Set the grid show.
     *
     * @param string $gridShow
     *
     * @return this
     */
    public function setMarkersSize($markersSize) :Charts
    {
        $this->markersSize = $markersSize;

        $this->setOption([
            'markers' => [
                'size' => $markersSize,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkersSize()
    {
        return $this->markersSize;
    }

    /**
     * Set the markers colors.
     *
     * @param array $markersColors
     *
     * @return this
     */
    public function setMarkersColors($markersColors) :Charts
    {
        $this->markersColors = $markersColors;

        $this->setOption([
            'markers' => [
                'colors' => $markersColors,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersColors()
    {
        return $this->markersColors;
    }

    /**
     * Set the markers strokeColors.
     *
     * @param array $markersStrokeColors
     *
     * @return this
     */
    public function setMarkersStrokeColors($markersStrokeColors) :Charts
    {
        $this->markersStrokeColors = $markersStrokeColors;

        $this->setOption([
            'markers' => [
                'strokeColors' => $markersStrokeColors,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersStrokeColors()
    {
        return $this->markersStrokeColors;
    }

    /**
     * Set the markers strokeWidth.
     *
     * @param array $markersStrokeWidth
     *
     * @return this
     */
    public function setMarkersStrokeWidth($markersStrokeWidth) :Charts
    {
        $this->markersStrokeWidth = $markersStrokeWidth;

        $this->setOption([
            'markers' => [
                'strokeWidth' => $markersStrokeWidth,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersStrokeWidth()
    {
        return $this->markersStrokeWidth;
    }

    /**
     * Set the markers strokeOpacity.
     *
     * @param array $markersStrokeOpacity
     *
     * @return this
     */
    public function setMarkersStrokeOpacity($markersStrokeOpacity) :Charts
    {
        $this->markersStrokeOpacity = $markersStrokeOpacity;

        $this->setOption([
            'markers' => [
                'strokeOpacity' => $markersStrokeOpacity,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersStrokeOpacity()
    {
        return $this->markersStrokeOpacity;
    }

    /**
     * Set the markers strokeDashArray.
     *
     * @param array $markersStrokeDashArray
     *
     * @return this
     */
    public function setMarkersStrokeDashArray($markersStrokeDashArray) :Charts
    {
        $this->markersStrokeDashArray = $markersStrokeDashArray;

        $this->setOption([
            'markers' => [
                'strokeDashArray' => $markersStrokeDashArray,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersStrokeDashArray()
    {
        return $this->markersStrokeDashArray;
    }

    /**
     * Set the markers fillOpacity.
     *
     * @param array $markersFillOpacity
     *
     * @return this
     */
    public function setMarkersFillOpacity($markersFillOpacity) :Charts
    {
        $this->markersFillOpacity = $markersFillOpacity;

        $this->setOption([
            'markers' => [
                'fillOpacity' => $markersFillOpacity,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersFillOpacity()
    {
        return $this->markersFillOpacity;
    }

    /**
     * Set the markers discrete.
     *
     * @param array $markersDiscrete
     *
     * @return this
     */
    public function setMarkersDiscrete($markersDiscrete) :Charts
    {
        $this->markersDiscrete = $markersDiscrete;

        $this->setOption([
            'markers' => [
                'discrete' => $markersDiscrete,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersDiscrete()
    {
        return $this->markersDiscrete;
    }

    /**
     * Set the markers shape.
     *
     * @param array $markersShape
     *
     * @return this
     */
    public function setMarkersShape($markersShape) :Charts
    {
        $this->markersShape = $markersShape;

        $this->setOption([
            'markers' => [
                'shape' => $markersShape,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersShape()
    {
        return $this->markersShape;
    }

    /**
     * Set the markers radius.
     *
     * @param array $markersRadius
     *
     * @return this
     */
    public function setMarkersRadius($markersRadius) :Charts
    {
        $this->markersRadius = $markersRadius;

        $this->setOption([
            'markers' => [
                'radius' => $markersRadius,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersRadius()
    {
        return $this->markersRadius;
    }

    /**
     * Set the markers offsetX.
     *
     * @param array $markersOffsetX
     *
     * @return this
     */
    public function setMarkersOffsetX($markersOffsetX) :Charts
    {
        $this->markersOffsetX = $markersOffsetX;

        $this->setOption([
            'markers' => [
                'offsetX' => $markersOffsetX,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersOffsetX()
    {
        return $this->markersOffsetX;
    }

    /**
     * Set the markers offsetY.
     *
     * @param array $markersOffsetY
     *
     * @return this
     */
    public function setMarkersOffsetY($markersOffsetY) :Charts
    {
        $this->markersOffsetY = $markersOffsetY;

        $this->setOption([
            'markers' => [
                'offsetY' => $markersOffsetY,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersOffsetY()
    {
        return $this->markersOffsetY;
    }

    /**
     * Set the markers onClick.
     *
     * @param array $markersOnClick
     *
     * @return this
     */
    public function setMarkersOnClick($markersOnClick) :Charts
    {
        $this->markersOnClick = $markersOnClick;

        $this->setOption([
            'markers' => [
                'onClick' => $markersOnClick,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersOnClick()
    {
        return $this->markersOnClick;
    }

    /**
     * Set the markers onDblClick.
     *
     * @param array $markersOnDblClick
     *
     * @return this
     */
    public function setMarkersOnDblClick($markersOnDblClick) :Charts
    {
        $this->markersOnDblClick = $markersOnDblClick;

        $this->setOption([
            'markers' => [
                'onDblClick' => $markersOnDblClick,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersOnDblClick()
    {
        return $this->markersOnDblClick;
    }

    /**
     * Set the markers showNullDataPoints.
     *
     * @param array $markersShowNullDataPoints
     *
     * @return this
     */
    public function setMarkersShowNullDataPoints($markersShowNullDataPoints) :Charts
    {
        $this->markersShowNullDataPoints = $markersShowNullDataPoints;

        $this->setOption([
            'markers' => [
                'showNullDataPoints' => $markersShowNullDataPoints,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersShowNullDataPoints()
    {
        return $this->markersShowNullDataPoints;
    }

    /**
     * Set the markers hover.
     *
     * @param array $markersHover
     *
     * @return this
     */
    public function setMarkersHover($markersHover) :Charts
    {
        $this->markersHover = $markersHover;

        $this->setOption([
            'markers' => [
                'hover' => $markersHover,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkersHover()
    {
        return $this->markersHover;
    }
}
