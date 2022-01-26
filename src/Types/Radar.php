<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;

class Radar extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('radar');
    }

    public function addArea(string $name, $data) :Radar
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
