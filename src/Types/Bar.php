<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;
use Illuminate\Support\Collection;

class Bar extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('bar');
    }

    public function addBar(string $name, array|Collection $data): Bar
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
