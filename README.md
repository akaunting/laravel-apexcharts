# ApexCharts package for Laravel

![Downloads](https://img.shields.io/packagist/dt/akaunting/laravel-apexcharts)
![Tests](https://img.shields.io/github/workflow/status/akaunting/laravel-apexcharts/Tests?label=tests)
[![StyleCI](https://github.styleci.io/repos/452210726/shield?style=flat&branch=master)](https://styleci.io/repos/452210726)
[![Quality](https://img.shields.io/scrutinizer/quality/g/akaunting/laravel-apexcharts?label=quality)](https://scrutinizer-ci.com/g/akaunting/laravel-apexcharts)
[![License](https://img.shields.io/github/license/akaunting/laravel-apexcharts)](LICENSE.md)

This package allows you to generate modern and interactive charts using the [ApexCharts](https://apexcharts.com) library directly from Laravel without interacting with JavaScript, CSS, etc.

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

You can change the column sorting settings of your app from `config/apexcharts.php` file

## Usage

```php
use Akaunting\Apexcharts\Charts;

$chart = new Charts();

$chart->setType('donut')
    ->setWidth('100%')
    ->setHeight(300)
    ->setLabels(['Sales', 'Deposit']);

$chart->setDataset('Name', 'donut', [1907, 1923]);
```

## Blade

```php
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8; charset=ISO-8859-1"/>

        <title>Apexcharts Sample Donut Chart</title>
    </head>

    <body>
        {!! $chart->container() !!}

        @apexchartsScripts

        {{ $chart->script() }}
    </body>
</html>
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
