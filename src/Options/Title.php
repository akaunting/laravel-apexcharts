<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Title
{
    /**
     * Stores the title of the title.
     *
     * @var string
     */
    public $title = '';

    /**
     * Stores the titlePosition of the title.
     *
     * @var int|string
     */
    public $titleAlign = 'left';

    /**
     * Stores the margin of the title.
     *
     * @var int
     */
    public $titleMargin = 10;

    /**
     * Stores the offsetX of the title.
     *
     * @var int
     */
    public $titleOffsetX = 0;

    /**
     * Stores the offsetY of the title.
     *
     * @var int
     */
    public $titleOffsetY = 0;

    /**
     * Stores the floating of the title.
     *
     * @var boolean
     */
    public $titleFloating = false;

    /**
     * Stores the foreColor of the chart.
     *
     * @var array
     */
    public $titleStyle = [];

    /**
     * Set the title text.
     *
     * @param int $height
     *
     * @return this
     */
    public function setTitle(string $title) :Charts
    {
        $this->title = $title;

        $this->setOption([
            'title' => [
                'text' => $title,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title position.
     *
     * @param string $titlePosition
     *
     * @return this
     */
    public function setTitlePosition($titlePosition) :Charts
    {
        $this->setTitleAlign($titlePosition);

        return $this;
    }

    /**
     * @return string
     */
    public function getTitlePosition()
    {
        return $this->getTitleAlign();
    }

    /**
     * Set the title align.
     *
     * @param string $titleAlign
     *
     * @return this
     */
    public function setTitleAlign($titleAlign) :Charts
    {
        $this->titleAlign = $titleAlign;

        $this->setOption([
            'title' => [
                'align' => $titleAlign,
            ],
        ]);

        return $this;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitleAlign()
    {
        return $this->titleAlign;
    }

    /**
     * Set the title margin.
     *
     * @param array $titleMargin
     *
     * @return this
     */
    public function setTitleMargin($titleMargin) :Charts
    {
        $this->titleMargin = $titleMargin;

        $this->setOption([
            'title' => [
                'margin' => $titleMargin,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getTitleMargin()
    {
        return $this->titleMargin;
    }

    /**
     * Set the title offsetX.
     *
     * @param int $titleOffsetX
     *
     * @return this
     */
    public function setTitleOffsetX($titleOffsetX) :Charts
    {
        $this->titleOffsetX = $titleOffsetX;

        $this->setOption([
            'title' => [
                'offsetX' => $titleOffsetX,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getTitleOffsetX()
    {
        return $this->titleOffsetX;
    }

    /**
     * Set the title offsetY.
     *
     * @param int $titleOffsetY
     *
     * @return this
     */
    public function setTitleOffsetY($titleOffsetY) :Charts
    {
        $this->titleOffsetY = $titleOffsetY;

        $this->setOption([
            'title' => [
                'offsetY' => $titleOffsetY,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getTitleOffsetY()
    {
        return $this->titleOffsetY;
    }

    /**
     * Set the title floating.
     *
     * @param string $titleFloating
     *
     * @return this
     */
    public function setTitleFloating(string $titleFloating) :Charts
    {
        $this->titleFloating = $titleFloating;

        $this->setOption([
            'title' => [
                'floating' => $titleFloating,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getTitleFloating()
    {
        return $this->titleFloating;
    }

    /**
     * Set the title style.
     *
     * @param string $titleStyle
     *
     * @return this
     */
    public function setTitleStyle($titleStyle) :Charts
    {
        $this->titleStyle = $titleStyle;

        $this->setOption([
            'title' => [
                'style' => $titleStyle,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getTitleStyle()
    {
        return $this->titleStyle;
    }
}
