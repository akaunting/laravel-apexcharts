<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;

class Radial extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('radialBar');
    }

    public function addRings(array $data) :Radial
    {
        return $this->setSeries($data);
    }
}
