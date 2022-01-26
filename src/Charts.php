<?php

namespace Akaunting\Apexcharts;

use Akaunting\Apexcharts\Options\Annotations;
use Akaunting\Apexcharts\Options\Chart;
use Akaunting\Apexcharts\Options\DataLabels;
use Akaunting\Apexcharts\Options\Fill;
use Akaunting\Apexcharts\Options\ForecastDataPoints;
use Akaunting\Apexcharts\Options\Grid;
use Akaunting\Apexcharts\Options\Legend;
use Akaunting\Apexcharts\Options\Markers;
use Akaunting\Apexcharts\Options\NoData;
use Akaunting\Apexcharts\Options\PlotOptions;
use Akaunting\Apexcharts\Options\Responsive;
use Akaunting\Apexcharts\Options\States;
use Akaunting\Apexcharts\Options\Stroke;
use Akaunting\Apexcharts\Options\Subtitle;
use Akaunting\Apexcharts\Options\Theme;
use Akaunting\Apexcharts\Options\Title;
use Akaunting\Apexcharts\Options\Tooltip;
use Akaunting\Apexcharts\Options\Xaxis;
use Akaunting\Apexcharts\Options\Yaxis;
use Akaunting\Apexcharts\Support\DatasetClass;
use Akaunting\Apexcharts\Traits\Formatter;
use Akaunting\Apexcharts\Traits\Types;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;

class Charts
{
    use Annotations, Chart, DataLabels, Fill, ForecastDataPoints, Grid, Legend, Markers, NoData, PlotOptions, Responsive, States, Stroke, Subtitle, Theme, Title, Tooltip, Xaxis, Yaxis, Formatter, Types;

    /**
     * Stores the chart ID.
     *
     * @var string
     */
    public $id;

    /**
     * Stores the chart type.
     *
     * @var string
     */
    public $type = 'line';

    /**
     * Stores the colors options.
     *
     * @var array
     */
    public $colors = [];

    /**
     * Stores the labels options.
     *
     * @var array
     */
    public $labels = [];

    /**
     * Stores the series options.
     *
     * @var array
     */
    public $series = [];

    /**
     * Stores the chart datasets.
     *
     * @var array
     */
    public $datasets = [];

    /**
     * Stores the dataset class to be used.
     *
     * @var object
     */
    protected $dataset = DatasetClass::class;

    /**
     * Stores the chart options.
     *
     * @var array
     */
    public $options = [];

    /**
     * Stores the chart container.
     *
     * @var string
     */
    public $container = 'apexcharts::container';

    /**
     * Stores the available chart letters to create the ID.
     *
     * @var string
     */
    private $chartLetters = 'abcdefghijklmnopqrstuvwxyz';

    public function __construct()
    {
        $this->id = substr(str_shuffle(str_repeat($x = $this->chartLetters, ceil(25 / strlen($x)))), 1, 25);

        $this->options = config('apexcharts.options');
    }

    /**
     * @return false|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param null $type
     * @return $this
     */
    public function setType($type = null) :Apexcharts
    {
        $this->type = $type;

        $this->setOption([
            'chart' => [
                'type' => $type,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type ? $this->type : $this->datasets[0]->type;
    }

    /**
     *
     * @param string $color
     * @return $this
     */
    public function setColor($color) :Apexcharts
    {
        $colors = $this->colors;

        $colors[] = $color;

        return $this->setColors($colors);
    }

    /**
     *
     * @param array $colors
     * @return $this
     */
    public function setColors($colors) :Apexcharts
    {
        $this->colors = $colors;

        $this->setOption([
            'colors' => $colors,
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     *
     * @param array $labels
     * @return $this
     */
    public function setLabels($labels) :Apexcharts
    {
        $this->labels = $labels;

        $this->setOption([
            'labels' => $labels,
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     *
     * @param array $series
     * @return $this
     */
    public function setSeries($series) :Apexcharts
    {
        $this->series = $series;

        $this->setOption([
            'series' => $series,
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Adds a new dataset to the chart.
     *
     * @param string           $name
     * @param array|Collection $data
     */
    public function setDataset(string $name, string $type, $data)
    {
        if ($data instanceof Collection) {
            $data = $data->toArray();
        }

        if ($type == 'donut') {
            return $this->setSeries($data);
        }

        $dataset = new $this->dataset($name, $type, $data);

        array_push($this->datasets, $dataset);

        return $this->setSeries($this->datasets);
    }

    /**
     *
     * @param array|Collection $options
     *
     * @return $this
     */
    public function setOption($options = []) :Apexcharts
    {
        if ($options instanceof Collection) {
            $options = $options->toArray();
        }

        $this->options = array_replace_recursive($this->options, $options);

        return $this;
    }

    /**
     *
     * @param array|Collection $options
     * @param bool             $overwrite
     * @return $this
     */
    public function setOptions($options = [], bool $overwrite = false) :Apexcharts
    {
        if ($options instanceof Collection) {
            $options = $options->toArray();
        }

        if ($overwrite) {
            $this->options = $options;
        } else {
            $this->options = array_replace_recursive($this->options, $options);
        }

        return $this;
    }

    /**
     * Set the chart options.
     *
     * @param array $options
     *
     * @return this
     */
    public function getOptions()
    {
        $options = [];

        return $this->options;
    }

    /**
     * Set the chart container.
     *
     * @param string $container
     *
     * @return this
     */
    public function container(string $container = null)
    {
        if (! $container) {
            return View::make($this->container, ['chart' => $this]);
        }

        $this->container = $container;

        return $this;
    }

    /**
     * @return mixed
     */
    public function script()
    {
        return View::make('apexcharts::script', ['chart' => $this]);
    }

    public static function loadScript() :string
    {
        $path = 'https://cdn.jsdelivr.net/npm/apexcharts';

        if (is_file('public/vendor/apexcharts/apexcharts.js')) {
            $path = asset('public/vendor/apexcharts/apexcharts.js');
        }

        return '<script src="' . $path . '"></script>';
    }
}
