<?php

namespace Akaunting\Apexcharts\Traits;

use Illuminate\Http\JsonResponse;

/** @mixin \Akaunting\Apexcharts\Chart */
trait Formatter
{
    public function toJson(): JsonResponse
    {
        return response()->json($this->toVue());
    }

    public function toVue(): array
    {
        $options = json_decode($this->getOptions(), true);

        unset($options['series']);

        return [
            'id'        => $this->getId(),
            'height'    => $this->getHeight(),
            'width'     => $this->getWidth() ?? '100%',
            'type'      => $this->getType(),
            'options'   => $options,
            'series'    => $this->getSeries(),
        ];
    }
}
