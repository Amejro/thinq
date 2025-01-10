<?php

namespace App\Livewire;

use Filament\Widgets\ChartWidget;

class AnalyticsBarChart extends ChartWidget
{
    protected static ?string $heading = 'Freight Bookings';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => '',
                    'data' => [45, 77, 89],
                    'backgroundColor' => [
                        '#97CBDC',
                        '#FBBA61',
                        '#F15928'

                    ],

                    'borderColor' => [
                        '#97CBDC',
                        '#FBBA61',
                        '#F15928'

                    ],
                    'maxBarThickness' => 25,
                ],

            ],
            'labels' => ['Sea', 'Air', 'Road'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
