<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Livewire\AnalyticsHeatMap;
use App\Livewire\AnalyticsBarChart;
use App\Livewire\AnalyticsAreaChart;
use App\Livewire\AnalyticsLineChart;

class Analytics extends Page
{
    protected static ?string $navigationIcon = 'carbon-analytics';

    protected static string $view = 'filament.pages.analytics';

    protected static ?int $navigationSort = 2;

    protected function getHeaderWidgets(): array
    {
        return [
            AnalyticsAreaChart::class,
            AnalyticsBarChart::class,
            AnalyticsHeatMap::class,
        ];
    }
}
