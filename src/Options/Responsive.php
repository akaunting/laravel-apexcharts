<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Responsive
{
    /**
     * Stores the breakpoint of the responsive.
     *
     * @var int
     */
    public $responsiveBreakpoint;

    /**
     * Stores the options of the responsive.
     *
     * @var objcet
     */
    public $responsiveOptions;

    /**
     * Set the responsive breakpoint.
     *
     * @param int $responsiveBreakpoint
     *
     * @return this
     */
    public function setResponsiveBreakpoint($responsiveBreakpoint) :Charts
    {
        $this->responsiveBreakpoint = $responsiveBreakpoint;

        $this->setOption([
            'responsive' => [
                'breakpoint' => $responsiveBreakpoint,
            ],
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function getResponsiveBreakpoint()
    {
        return $this->responsiveBreakpoint;
    }

    /**
     * Set the responsive options.
     *
     * @param object $responsiveOptions
     *
     * @return this
     */
    public function setResponsiveOptions($responsiveOptions) :Charts
    {
        $this->responsiveOptions = $responsiveOptions;

        $this->setOption([
            'responsive' => [
                'options' => $responsiveOptions,
            ],
        ]);

        return $this;
    }

    /**
     * @return object
     */
    public function getResponsiveOptions()
    {
        return $this->responsiveOptions;
    }
}
