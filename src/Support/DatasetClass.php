<?php

namespace Akaunting\Apexcharts\Support;

use Illuminate\Support\Collection;

class DatasetClass
{
    /**
     * Defines the name of the dataset.
     *
     * @var string
     */
    public $name = 'Undefined';

    /**
     * Defines the dataset type.
     *
     * @var string
     */
    public $type = '';

    /**
     * Stores the dataset data.
     *
     * @var array
     */
    public $data = [];

    /**
     * Stores the dataset options.
     *
     * @var array
     */
    public $options = [];

    /**
     * Defines the undefined color.
     *
     * @var string
     */
    public $undefinedColor = '#22292F';

    /**
     * Creates a new dataset with the given values.
     *
     * @param string $name
     * @param string $type
     * @param array  $values
     */
    public function __construct(string $name, string $type, array $data)
    {
        $this->name = $name;
        $this->type = $type;
        $this->data = $data;

        return $this;
    }

    /**
     * Set the dataset type.
     *
     * @param string $type
     *
     * @return self
     */
    public function type(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Set the dataset values.
     *
     * @param array|Collection $values
     *
     * @return self
     */
    public function data($data)
    {
        if ($data instanceof Collection) {
            $data = $data->toArray();
        }

        $this->data = $data;

        return $this;
    }

    /**
     * Set the dataset options.
     *
     * @param array|Collection $options
     * @param bool             $overwrite
     *
     * @return self
     */
    public function options($options, bool $overwrite = false)
    {
        if ($overwrite) {
            $this->options = $options;
        } else {
            $this->options = array_replace_recursive($this->options, $options);
        }

        return $this;
    }

    /**
     * Matches the data of the dataset with the given number.
     *
     * @param int  $data
     * @param bool $strict
     *
     * @return void
     */
    public function matchdata(int $data, bool $strict = false)
    {
        while (count($this->data) < $data) {
            array_push($this->data, 0);
        }

        if ($strict) {
            $this->data = array_slice($this->data, 0, $data);
        }
    }
}
