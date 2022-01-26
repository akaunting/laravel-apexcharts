<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;

class Area extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('area');
    }

    public function addArea(string $name, $data) :Area
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
