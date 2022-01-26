<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait NoData
{
    /**
     * Stores the text of the noData.
     *
     * @var string
     */
    public $noDataText = '';

    /**
     * Stores the align of the noData.
     *
     * @var string
     */
    public $noDataAlign = 'center';

    /**
     * Stores the verticalAlign of the noData.
     *
     * @var string
     */
    public $noDataVerticalAlign = 'middle';

    /**
     * Stores the offsetX of the noData.
     *
     * @var int
     */
    public $noDataOffsetX = 0;

    /**
     * Stores the offsetY of the noData.
     *
     * @var int
     */
    public $noDataOffsetY = 0;

    /**
     * Stores the style of the noData.
     *
     * @var array
     */
    public $noDataStyle = [];

    /**
     * Set the noData text.
     *
     * @param string $noDataText
     *
     * @return this
     */
    public function setNoDataText($noDataText) :Charts
    {
        $this->noDataText = $noDataText;

        $this->setOption([
            'noData' => [
                'text' => $noDataText,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getNoDataText()
    {
        return $this->noDataText;
    }

    /**
     * Set the noData align.
     *
     * @param string $noDataAlign
     *
     * @return this
     */
    public function setNoDataAlign($noDataAlign) :Charts
    {
        $this->noDataAlign = $noDataAlign;

        $this->setOption([
            'noData' => [
                'align' => $noDataAlign,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getNoDataAlign()
    {
        return $this->noDataAlign;
    }

    /**
     * Set the noData verticalAlign.
     *
     * @param string $noDataVerticalAlign
     *
     * @return this
     */
    public function setNoDataVerticalAlign($noDataVerticalAlign) :Charts
    {
        $this->noDataVerticalAlign = $noDataVerticalAlign;

        $this->setOption([
            'noData' => [
                'verticalAlign' => $noDataVerticalAlign,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getNoDataVerticalAlign()
    {
        return $this->noDataVerticalAlign;
    }

    /**
     * Set the noData offsetX.
     *
     * @param int $noDataOffsetX
     *
     * @return this
     */
    public function setNoDataOffsetX($noDataOffsetX) :Charts
    {
        $this->noDataOffsetX = $noDataOffsetX;

        $this->setOption([
            'noData' => [
                'offsetX' => $noDataOffsetX,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getNoDataOffsetX()
    {
        return $this->noDataOffsetX;
    }

    /**
     * Set the noData offsetY.
     *
     * @param int $noDataOffsetY
     *
     * @return this
     */
    public function setNoDataOffsetY($noDataOffsetY) :Charts
    {
        $this->noDataOffsetY = $noDataOffsetY;

        $this->setOption([
            'noData' => [
                'offsetY' => $noDataOffsetY,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getNoDataOffsetY()
    {
        return $this->noDataOffsetY;
    }

    /**
     * Set the noData style.
     *
     * @param array $noDataStyle
     *
     * @return this
     */
    public function setNoDataStyle($noDataStyle) :Charts
    {
        $this->noDataStyle = $noDataStyle;

        $this->setOption([
            'noData' => [
                'style' => $noDataStyle,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getNoDataStyle()
    {
        return $this->noDataStyle;
    }
}
