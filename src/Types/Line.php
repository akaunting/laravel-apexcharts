<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;

class Line extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('line');
    }

    public function addLine(string $name, $data) :Line
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
