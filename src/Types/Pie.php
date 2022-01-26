<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;

class Pie extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('pie');
    }

    public function addPieces(array $data) :Pie
    {
        return $this->setSeries($data);
    }
}
