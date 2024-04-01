<?php

return [

    /*
    |--------------------------------------------------------------------------
    | ApexCharts Default Options
    |--------------------------------------------------------------------------
    |
    | Here you may define the default options that will be applied to all
    | ApexCharts rendered using this package. To learn more about each
    | available option, check the official ApexCharts documentation.
    |
    | https://apexcharts.com/docs/options/
    |
    */

    'options' => [
        'chart' => [
            'type' => 'line',
            'height' => 500,
            'width' => null,
            'toolbar' => [
                'show' => false,
            ],
            'stacked' => false,
            'zoom' => [
                'enabled' => true,
            ],
            'fontFamily' => 'inherit',
            'foreColor' => '#373d3f',
        ],

        'plotOptions' => [
            'bar' => [
                'horizontal' => false,
            ],
        ],

        'colors' => [
            '#008FFB', '#00E396', '#feb019', '#ff455f', '#775dd0', '#80effe',
            '#0077B5', '#ff6384', '#c9cbcf', '#0057ff', '#00a9f4', '#2ccdc9', '#5e72e4'
        ],

        'series' => [],

        'dataLabels' => [
            'enabled' => false
        ],

        'labels' => [],

        'title' => [
            'text' => []
        ],

        'subtitle' => [
            'text' => 'undefined',
            'align' => 'left',
        ],

        'xaxis' => [
            'categories' => [],
        ],

        'grid' => [
            'show' => true
        ],

        'markers' => [
            'size' => 4,
            'colors' => [
                '#008FFB', '#00E396', '#feb019', '#ff455f', '#775dd0', '#80effe',
                '#0077B5', '#ff6384', '#c9cbcf', '#0057ff', '#00a9f4', '#2ccdc9', '#5e72e4'
            ],
            'strokeColors' => "#fff",
            'strokeWidth' => 2,
            'hover' => [
                'size' => 7,
            ],
        ],

        'stroke' => [
            'show' => true,
            'width' => 4,
            'colors' => [
                '#008FFB', '#00E396', '#feb019', '#ff455f', '#775dd0', '#80effe',
                '#0077B5', '#ff6384', '#c9cbcf', '#0057ff', '#00a9f4', '#2ccdc9', '#5e72e4'
            ]
        ],
    ],

];
