<?php

namespace App\Livewire;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class AnalyticsAreaChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'analyticsAreaChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Inventory';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => 'area',
                'height' => 300,
            ],
            'series' => [
                // [
                //     'name' => 'AnalyticsAreaChart',
                //     'data' => [7, 4, 6, 10, 14, 7, 5, 9, 10, 15, 13, 18],
                // ],

                [
                    'name' => 'Stocked',
                    'data' => [10, 30, 25, 2, 21, 32, 45, 74, 65, 45, 77, 89],

                ],

                [
                    'name' => 'Limited',
                    'data' => [73, 20, 10, 50, 15, 60, 35, 90, 40, 100, 20, 75],

                ],

                [
                    'name' => 'No Stock',
                    'data' => [25, 12, 45, 48, 30, 25, 80, 15, 100, 50, 10, 85],

                ],
            ],
            'xaxis' => [
                'categories' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'colors' => ['#018ABD', '#FBBA61', '#F2693E'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
        ];
    }
}
