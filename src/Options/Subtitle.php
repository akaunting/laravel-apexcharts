<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Subtitle
{
    /**
     * Stores the subtitle of the title.
     *
     * @var string
     */
    public $subtitle = '';

    /**
     * Stores the subtitlePosition of the subtitle.
     *
     * @var int|string
     */
    public $subtitleAlign = 'left';

    /**
     * Stores the margin of the subtitle.
     *
     * @var int
     */
    public $subtitleMargin = 10;

    /**
     * Stores the offsetX of the subtitle.
     *
     * @var int
     */
    public $subtitleOffsetX = 0;

    /**
     * Stores the offsetY of the subtitle.
     *
     * @var int
     */
    public $subtitleOffsetY = 0;

    /**
     * Stores the floating of the subtitle.
     *
     * @var boolean
     */
    public $subtitleFloating = false;

    /**
     * Stores the foreColor of the chart.
     *
     * @var array
     */
    public $subtitleStyle = [];

    /**
     * Set the subtitle text.
     *
     * @param int $height
     *
     * @return this
     */
    public function setSubtitle(string $subtitle) :Charts
    {
        $this->subtitle = $subtitle;

        $this->setOption([
            'subtitle' => [
                'text' => $subtitle,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the subtitle position.
     *
     * @param string $subtitlePosition
     *
     * @return this
     */
    public function setSubtitlePosition($subtitlePosition) :Charts
    {
        $this->setSubtitleAlign($subtitlePosition);

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitlePosition()
    {
        return $this->getSubtitleAlign();
    }

    /**
     * Set the subtitle align.
     *
     * @param string $subtitleAlign
     *
     * @return this
     */
    public function setSubtitleAlign($subtitleAlign) :Charts
    {
        $this->subtitleAlign = $subtitleAlign;

        $this->setOption([
            'subtitle' => [
                'align' => $titleAlign,
            ],
        ]);

        return $this;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitleAlign()
    {
        return $this->subtitleAlign;
    }

    /**
     * Set the subtitle margin.
     *
     * @param array $subtitleMargin
     *
     * @return this
     */
    public function setSubtitleMargin($subtitleMargin) :Charts
    {
        $this->subtitleMargin = $subtitleMargin;

        $this->setOption([
            'subtitle' => [
                'margin' => $subtitleMargin,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getSubtitleMargin()
    {
        return $this->subtitleMargin;
    }

    /**
     * Set the subtitle offsetX.
     *
     * @param int $subtitleOffsetX
     *
     * @return this
     */
    public function setSubtitleOffsetX($subtitleOffsetX) :Charts
    {
        $this->subtitleOffsetX = $subtitleOffsetX;

        $this->setOption([
            'subtitle' => [
                'offsetX' => $subtitleOffsetX,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getSubtitleOffsetX()
    {
        return $this->subtitleOffsetX;
    }

    /**
     * Set the subtitle offsetY.
     *
     * @param int $subtitleOffsetY
     *
     * @return this
     */
    public function setSubtitleOffsetY($subtitleOffsetY) :Charts
    {
        $this->subtitleOffsetY = $subtitleOffsetY;

        $this->setOption([
            'subtitle' => [
                'offsetY' => $subtitleOffsetY,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getSubtitleOffsetY()
    {
        return $this->subtitleOffsetY;
    }

    /**
     * Set the subtitle floating.
     *
     * @param string $subtitleFloating
     *
     * @return this
     */
    public function setSubtitleFloating(string $subtitleFloating) :Charts
    {
        $this->fontFamily = $subtitleFloating;

        $this->setOption([
            'subtitle' => [
                'floating' => $subtitleFloating,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitleFloating()
    {
        return $this->subtitleFloating;
    }

    /**
     * Set the subtitle style.
     *
     * @param string $subtitleStyle
     *
     * @return this
     */
    public function setSubtitleStyle($subtitleStyle) :Charts
    {
        $this->subtitleStyle = $subtitleStyle;

        $this->setOption([
            'subtitle' => [
                'style' => $subtitleStyle,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitleStyle()
    {
        return $this->subtitleStyle;
    }
}
