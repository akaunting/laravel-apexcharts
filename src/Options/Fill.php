<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Fill
{
    /**
     * Stores the colors of the fill.
     *
     * @var array
     */
    public $fillColors = [];

    /**
     * Stores the opacity of the fill.
     *
     * @var int
     */
    public $fillOpacity = 0.9;

    /**
     * Stores the type of the fill.
     *
     * @var string
     */
    public $fillType = 'solid';

    /**
     * Stores the gradient of the fill.
     *
     * @var array
     */
    public $fillGradient = [];

    /**
     * Stores the image of the fill.
     *
     * @var array
     */
    public $fillImage = [];

    /**
     * Stores the pattern of the fill.
     *
     * @var array
     */
    public $fillPattern = [];

    /**
     * Set the fill colors.
     *
     * @param array $fillColors
     *
     * @return this
     */
    public function setFillColors($fillColors) :Charts
    {
        $this->fillColors = $fillColors;

        $this->setOption([
            'fill' => [
                'colors' => $fillColors,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getFillColors()
    {
        return $this->fillColors;
    }

    /**
     * Set the fill opacity.
     *
     * @param array $fillOpacity
     *
     * @return this
     */
    public function setFillOpacity($fillOpacity) :Charts
    {
        $this->fillOpacity = $fillOpacity;

        $this->setOption([
            'fill' => [
                'opacity' => $fillOpacity,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getFillOpacity()
    {
        return $this->fillOpacity;
    }

    /**
     * Set the fill type.
     *
     * @param string $fillType
     *
     * @return this
     */
    public function setFillType($fillType) :Charts
    {
        $this->fillType = $fillType;

        $this->setOption([
            'fill' => [
                'type' => $fillType,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getFillType()
    {
        return $this->fillType;
    }

    /**
     * Set the fill gradient.
     *
     * @param array $fillGradient
     *
     * @return this
     */
    public function setFillGradient($fillGradient) :Charts
    {
        $this->fillGradient = $fillGradient;

        $this->setOption([
            'fill' => [
                'gradient' => $fillGradient,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getFillGradient()
    {
        return $this->fillGradient;
    }

    /**
     * Set the fill image.
     *
     * @param array $fillImage
     *
     * @return this
     */
    public function setFillImage($fillImage) :Charts
    {
        $this->fillImage = $fillImage;

        $this->setOption([
            'fill' => [
                'image' => $fillImage,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getFillImage()
    {
        return $this->fillImage;
    }

    /**
     * Set the fill pattern.
     *
     * @param array $fillPattern
     *
     * @return this
     */
    public function setFillPattern($fillPattern) :Charts
    {
        $this->fillPattern = $fillPattern;

        $this->setOption([
            'fill' => [
                'pattern' => $fillPattern,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getFillPattern()
    {
        return $this->fillPattern;
    }
}
