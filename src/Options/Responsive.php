<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Chart;
use Illuminate\Support\Collection;

/**
 * ApexCharts expects `responsive` to be a list of breakpoints:
 * [['breakpoint' => 480, 'options' => [...]], ...]
 *
 * @see https://apexcharts.com/docs/options/responsive/
 */
trait Responsive
{
    public array $responsive = [];

    public int $responsiveBreakpoint;

    public array|object $responsiveOptions;

    public function setResponsive(array|Collection $responsive): Chart
    {
        if ($responsive instanceof Collection) {
            $responsive = $responsive->toArray();
        }

        $this->responsive = array_values($responsive);

        $this->options['responsive'] = $this->responsive;

        return $this;
    }

    public function getResponsive(): array
    {
        return $this->responsive;
    }

    public function addResponsive(int $breakpoint, array|object $options): Chart
    {
        $responsive = $this->responsive;

        $responsive[] = [
            'breakpoint' => $breakpoint,
            'options' => $options,
        ];

        return $this->setResponsive($responsive);
    }

    /**
     * Sets the breakpoint of the first responsive entry.
     */
    public function setResponsiveBreakpoint(int $responsiveBreakpoint): Chart
    {
        $this->responsiveBreakpoint = $responsiveBreakpoint;

        return $this->setFirstResponsive('breakpoint', $responsiveBreakpoint);
    }

    public function getResponsiveBreakpoint(): int
    {
        return $this->responsiveBreakpoint;
    }

    /**
     * Sets the options of the first responsive entry.
     */
    public function setResponsiveOptions(array|object $responsiveOptions): Chart
    {
        $this->responsiveOptions = $responsiveOptions;

        return $this->setFirstResponsive('options', $responsiveOptions);
    }

    public function getResponsiveOptions(): array|object
    {
        return $this->responsiveOptions;
    }

    protected function setFirstResponsive(string $key, mixed $value): Chart
    {
        $responsive = $this->responsive;

        $responsive[0] = array_merge($responsive[0] ?? [], [$key => $value]);

        return $this->setResponsive($responsive);
    }
}
