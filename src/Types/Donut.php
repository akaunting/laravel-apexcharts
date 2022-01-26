<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;

class Donut extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('donut');
    }

    public function addPieces(array $data) :Donut
    {
        return $this->setSeries($data);
    }
}
