<?php

namespace Akaunting\Apexcharts\Traits;

trait Formatter
{
    public function toJson()
    {
        $options = $this->getOptions();

        return response()->json([
            'id' => $this->id(),
            'options' => $options,
        ]);
    }

    public function toVue() :array
    {
        $options = $this->getOptions();

        return [
            'height' => $this->getHeight(),
            'width' => $this->getWidth(),
            'type' => $this->getType(),
            'options' => $options,
            'series' => json_decode($this->getSeries()),
        ];
    }
}
