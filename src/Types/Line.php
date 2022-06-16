<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;
use Illuminate\Support\Collection;

class Line extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('line');
    }

    public function addLine(string $name, array|Collection $data): Line
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
