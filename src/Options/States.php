<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait States
{
    /**
     * Stores the normal of the states.
     *
     * @var array
     */
    public $statesNormal;

    /**
     * Stores the hover of the states.
     *
     * @var array
     */
    public $statesHover;

    /**
     * Stores the active of the states.
     *
     * @var array
     */
    public $statesActive;

    /**
     * Set the states normal.
     *
     * @param array $statesNormal
     *
     * @return this
     */
    public function setStatesNormal($statesNormal) :Charts
    {
        $this->statesNormal = $statesNormal;

        $this->setOption([
            'states' => [
                'normal' => $statesNormal,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getStatesNormal()
    {
        return $this->statesNormal;
    }

    /**
     * Set the states hover.
     *
     * @param string $statesHover
     *
     * @return this
     */
    public function setStatesHover($statesHover) :Charts
    {
        $this->statesHover = $statesHover;

        $this->setOption([
            'states' => [
                'hover' => $statesHover,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getStatesHover()
    {
        return $this->statesHover;
    }

    /**
     * Set the states active.
     *
     * @param array $statesActive
     *
     * @return this
     */
    public function setStatesActive($statesActive) :Charts
    {
        $this->statesActive = $statesActive;

        $this->setOption([
            'states' => [
                'active' => $statesActive,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getStatesActive()
    {
        return $this->statesActive;
    }
}
