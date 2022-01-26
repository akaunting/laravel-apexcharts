<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;

class HeatMap extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('heatmap');
    }

    public function addHeat(string $name, $data) :HeatMap
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
