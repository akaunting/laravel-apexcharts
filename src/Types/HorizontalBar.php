<?php

namespace Akaunting\Apexcharts\Types;

use Akaunting\Apexcharts\Charts;
use Illuminate\Support\Collection;

class HorizontalBar extends Charts
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('bar');

        $this->setBar([
            'horizontal' => true,
        ]);
    }

    public function addBar(string $name, array|Collection $data): HorizontalBar
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
