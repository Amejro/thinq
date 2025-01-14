<?php

namespace App\Livewire;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class AnalyticsHeatMap extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'analyticsHeatMap';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Cargo Shipment';

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
                'type' => 'heatmap',
                'height' => 300,
            ],
            'series' => [
                ['name' => 'Jan', 'data' => [[55, 70], [33, 42], [68, 40], [40, 48], [63, 19], [38, 23]]],
                ['name' => 'Feb', 'data' => [[44, 38], [37, 47], [16, 52], [30, 27], [46, 55], [37, 13]]],
                ['name' => 'Mar', 'data' => [[10, 42], [30, 16], [54, 34], [31, 47], [30, 31], [58, 60]]],
                ['name' => 'Apr', 'data' => [[14, 60], [50, 30], [64, 13], [34, 32], [41, 23], [15, 70]]],
                ['name' => 'May', 'data' => [[66, 69], [42, 20], [47, 34], [12, 37], [59, 29], [25, 60]]],
            ],
            'xaxis' => [
                'type' => 'category',
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
            'dataLabels' => [
                'enabled' => false,
            ],
            'colors' => ['#97CBDC', '#FBBA61', '#F15928'],
        ];
    }
}
