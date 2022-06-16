<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;
use Illuminate\Support\Collection;

class HeatMap extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('heatmap');
    }

    public function addHeat(string $name, array|Collection $data): HeatMap
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
