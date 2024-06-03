# ApexCharts package for Laravel

![Downloads](https://img.shields.io/packagist/dt/akaunting/laravel-apexcharts)
![Tests](https://img.shields.io/github/actions/workflow/status/akaunting/laravel-apexcharts/tests.yml?label=tests)
[![StyleCI](https://github.styleci.io/repos/452221855/shield?style=flat&branch=master)](https://styleci.io/repos/452221855)
[![License](https://img.shields.io/github/license/akaunting/laravel-apexcharts)](LICENSE.md)

This package allows you to generate modern and interactive charts using the [ApexCharts](https://apexcharts.com) library directly from `Laravel` without interacting with JavaScript, CSS, etc.

It covers all of the chart [types](https://apexcharts.com/docs/chart-types/line-chart) and [options](https://apexcharts.com/docs/options/annotations) available within the `ApexCharts` library.

Check out the [Akaunting](https://github.com/akaunting/akaunting) project to see it live.

## Getting Started

### 1. Install

Run the following command:

```bash
composer require akaunting/laravel-apexcharts
```

### 2. Publish

Publish configuration

```bash
php artisan vendor:publish --tag=apexcharts
```

### 3. Configure

You can change the chart settings of your app from `config/apexcharts.php` file

## Usage

### Blade

Create an instance of the `Chart` class and set the data and options according to your needs.

```php
use Akaunting\Apexcharts\Chart;

// ...

$chart = (new Chart)->setType('donut')
    ->setWidth('100%')
    ->setHeight(300)
    ->setLabels(['Sales', 'Deposit'])
    ->setDataset('Income by Category', 'donut', [1907, 1923]);
```

Then, include the JavaScript (on every page using charts).

```blade
<!-- layout.blade.php -->

<body>
    <!-- ... -->

    @apexchartsScripts
</body>
```

Finally, call the `container` and `script` method wherever you want to display the chart.

```blade
<!-- dashboard.blade.php -->

{!! $chart->container() !!}

{!! $chart->script() !!}
```

### Vue

If you're using Vue and Inertia, install Apexcharts and their Vue 3 adapter:

```bash
npm install --save apexcharts
npm install --save vue3-apexcharts
```

```js
// resources/js/app.js

import VueApexCharts from 'vue3-apexcharts';

createInertiaApp({
    // ...
    setup({el, App, props, plugin}) {
        return createApp({ render: () => h(App, props) })
            .use(VueApexCharts)
            .mount(el);
    },
});
```

Then, create a simple `chart.vue` component:

```vue
<!-- components/chart.vue -->

<template>
    <apexchart
        :id="chart.id"
        :key="chart.id"
        :type="chart.type"
        :width="chart.width"
        :height="chart.height"
        :series="chart.series"
        :options="chart.options"
    />
</template>

<script setup>
defineProps({
    chart: Object,
});
</script>
```

Create an instance of `Chart` and call `toVue()` before passing it to your page:

```php
Route::get('dashboard', function () {
    $chart = (new Chart)->setType('...');

    return inertia('dashboard', [
        'chart' => $chart->toVue(),
    ]);
});
```

Finally, render the chart:

```vue
<!-- pages/dashboard.vue -->

<template>
    <Chart :chart="chart" />
</template>

<script setup>
import Chart from './components/chart.vue';

defineProps({
    chart: Object,
});
</script>
```

## Testing

```bash
composer test
```

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Pull requests are more than welcome. You must follow the PSR coding standards.

## Security

Please review [our security policy](https://github.com/akaunting/laravel-apexcharts/security/policy) on how to report security vulnerabilities.

## Credits

- [Cüneyt Şentürk](https://github.com/cuneytsenturk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
