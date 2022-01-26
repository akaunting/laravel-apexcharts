<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Annotations
{
    /**
     * Stores the position of the annotations.
     *
     * @var string
     */
    public $annotationsPosition = '';

    /**
     * Stores the yaxis of the annotations.
     *
     * @var array
     */
    public $annotationsYaxis = [];

    /**
     * Stores the xaxis of the annotations.
     *
     * @var array
     */
    public $annotationsXaxis = [];

    /**
     * Stores the points of the annotations.
     *
     * @var array
     */
    public $annotationsPoints = [];

    /**
     * Stores the texts of the annotations.
     *
     * @var array
     */
    public $annotationsTexts = [];

    /**
     * Stores the images of the annotations.
     *
     * @var array
     */
    public $annotationsImages = [];

    /**
     * Set the annotations position.
     *
     * @param string $annotationsPosition
     *
     * @return this
     */
    public function setAnnotationsPosition($annotationsPosition) :Charts
    {
        $this->annotationsPosition = $annotationsPosition;

        $this->setOption([
            'annotations' => [
                'position' => $annotationsPosition,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getAnnotationsPosition()
    {
        return $this->annotationsPosition;
    }

    /**
     * Set the annotations yaxis.
     *
     * @param array $annotationsYaxis
     *
     * @return this
     */
    public function setAnnotationsYaxis($annotationsYaxis) :Charts
    {
        $this->annotationsYaxis = $annotationsYaxis;

        $this->setOption([
            'annotations' => [
                'yaxis' => $annotationsYaxis,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getAnnotationsYaxis()
    {
        return $this->annotationsYaxis;
    }

    /**
     * Set the annotations xaxis.
     *
     * @param array $annotationsXaxis
     *
     * @return this
     */
    public function setAnnotationsXaxis($annotationsXaxis) :Charts
    {
        $this->annotationsXaxis = $annotationsXaxis;

        $this->setOption([
            'annotations' => [
                'xaxis' => $annotationsXaxis,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getAnnotationsXaxis()
    {
        return $this->annotationsXaxis;
    }

    /**
     * Set the annotations points.
     *
     * @param array $annotationsPoints
     *
     * @return this
     */
    public function setAnnotationsPoints($annotationsPoints) :Charts
    {
        $this->annotationsPoints = $annotationsPoints;

        $this->setOption([
            'annotations' => [
                'points' => $annotationsPoints,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAnnotationsPoints()
    {
        return $this->annotationsPoints;
    }

    /**
     * Set the annotations texts.
     *
     * @param array $annotationsTexts
     *
     * @return this
     */
    public function setAnnotationsTexts($annotationsTexts) :Charts
    {
        $this->annotationsTexts = $annotationsTexts;

        $this->setOption([
            'annotations' => [
                'texts' => $annotationsTexts,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getAnnotationsTexts()
    {
        return $this->annotationsTexts;
    }

    /**
     * Set the annotations images.
     *
     * @param array $annotationsImages
     *
     * @return this
     */
    public function setAnnotationsImages($annotationsImages) :Charts
    {
        $this->annotationsImages = $annotationsImages;

        $this->setOption([
            'annotations' => [
                'images' => $annotationsImages,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getAnnotationsImages()
    {
        return $this->annotationsImages;
    }
}
