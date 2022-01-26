<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Grid
{
    /**
     * Stores the show of the grid.
     *
     * @var boolean
     */
    public $gridShow = true;

    /**
     * Stores the borderColor of the grid.
     *
     * @var string
     */
    public $gridBorderColor = '#90A4AE';

    /**
     * Stores the strokeDashArray of the grid.
     *
     * @var int
     */
    public $gridStrokeDashArray = 0;

    /**
     * Stores the position of the grid.
     *
     * @var string
     */
    public $gridPosition = 'back';

    /**
     * Stores the xaxis of the grid.
     *
     * @var array
     */
    public $gridXaxis = [];

    /**
     * Stores the yaxis of the grid.
     *
     * @var array
     */
    public $gridYaxis = [];

    /**
     * Stores the row of the grid.
     *
     * @var array
     */
    public $gridRow = [];

    /**
     * Stores the column of the grid.
     *
     * @var array
     */
    public $gridColumn = [];

    /**
     * Stores the padding of the grid.
     *
     * @var array
     */
    public $gridPadding = [];

    /**
     * Set the grid show.
     *
     * @param string $gridShow
     *
     * @return this
     */
    public function setGridShow($gridShow) :Charts
    {
        $this->gridShow = $gridShow;

        $this->setOption([
            'grid' => [
                'show' => $gridShow,
            ],
        ]);

        return $this;
    }

    /**
     * @return boolean
     */
    public function getGridShow()
    {
        return $this->gridShow;
    }

    /**
     * Set the grid borderColor.
     *
     * @param string $gridBorderColor
     *
     * @return this
     */
    public function setGridBorderColor($gridBorderColor) :Charts
    {
        $this->gridBorderColor = $gridBorderColor;

        $this->setOption([
            'grid' => [
                'borderColor' => $gridBorderColor,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getGridBorderColor()
    {
        return $this->gridBorderColor;
    }

    /**
     * Set the grid strokeDashArray.
     *
     * @param int $gridStrokeDashArray
     *
     * @return this
     */
    public function setGridStrokeDashArray($gridStrokeDashArray) :Charts
    {
        $this->gridStrokeDashArray = $gridStrokeDashArray;

        $this->setOption([
            'grid' => [
                'strokeDashArray' => $gridStrokeDashArray,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getGridStrokeDashArray()
    {
        return $this->gridStrokeDashArray;
    }

    /**
     * Set the grid position.
     *
     * @param string $gridPosition
     *
     * @return this
     */
    public function setGridPosition($gridPosition) :Charts
    {
        $this->gridPosition = $gridPosition;

        $this->setOption([
            'grid' => [
                'position' => $gridPosition,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getGridPosition()
    {
        return $this->gridPosition;
    }

    /**
     * Set the grid xaxis.
     *
     * @param array $gridXaxis
     *
     * @return this
     */
    public function setGridXaxis($gridXaxis) :Charts
    {
        $this->gridXaxis = $gridXaxis;

        $this->setOption([
            'grid' => [
                'xaxis' => $gridXaxis,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getGridXaxis()
    {
        return $this->gridXaxis;
    }

    /**
     * Set the grid yaxis.
     *
     * @param array $gridYaxis
     *
     * @return this
     */
    public function setGridYaxis($gridYaxis) :Charts
    {
        $this->gridYaxis = $gridYaxis;

        $this->setOption([
            'grid' => [
                'yaxis' => $gridYaxis,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getGridYaxis()
    {
        return $this->gridYaxis;
    }

    /**
     * Set the grid row.
     *
     * @param array $gridRow
     *
     * @return this
     */
    public function setGridRow($gridRow) :Charts
    {
        $this->gridRow = $gridRow;

        $this->setOption([
            'grid' => [
                'row' => $gridRow,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getGridRow()
    {
        return $this->gridRow;
    }

    /**
     * Set the grid column.
     *
     * @param array $gridColumn
     *
     * @return this
     */
    public function setGridColumn($gridColumn) :Charts
    {
        $this->gridColumn = $gridColumn;

        $this->setOption([
            'grid' => [
                'column' => $gridColumn,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getGridColumn()
    {
        return $this->gridColumn;
    }

    /**
     * Set the grid padding.
     *
     * @param array $gridPadding
     *
     * @return this
     */
    public function setGridPadding($gridPadding) :Charts
    {
        $this->gridPadding = $gridPadding;

        $this->setOption([
            'grid' => [
                'padding' => $gridPadding,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getGridPadding()
    {
        return $this->gridPadding;
    }
}
