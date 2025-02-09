<?php

namespace App\Livewire;

use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use function Livewire\before;
use Illuminate\Support\HtmlString;

class TrackingOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                new HtmlString('<div class="flex  items-center"><svg class="size-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none"><g transform="translate(3, 3)"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M13.1976 1.21963L3.11967 11.2976C2.9692 11.448 2.87065 11.6426 2.83836 11.8529L2.13291 16.4474C2.03041 17.115 2.60551 17.6901 3.27309 17.5876L7.86762 16.8822C8.07795 16.8499 8.2725 16.7513 8.42297 16.6009L18.5009 6.52294C18.8914 6.13241 18.8914 5.49925 18.5009 5.10872L14.6118 1.21963C14.2213 0.82911 13.5881 0.829111 13.1976 1.21963ZM4.31657 15.404L4.76548 12.4802L13.9047 3.34095L16.3796 5.81583L7.24036 14.9551L4.31657 15.404Z" fill="currentColor"></path><path d="M11.442 5.24658L12.5027 4.18592L15.7436 7.42683L14.6829 8.48749L11.442 5.24658Z" fill="currentColor"></path></g></g><path fill-rule="evenodd" clip-rule="evenodd" d="M13 24C19.0751 24 24 19.0751 24 13C24 6.92487 19.0751 2 13 2C6.92487 2 2 6.92487 2 13C2 19.0751 6.92487 24 13 24ZM13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z" fill="currentColor"></path></svg> <div class="ml-1"> Booking</div></div>')
                ,
                '536'
            )
                ->description(new HtmlString("<div class='text-xs'>+85% <span class='text-gray-400'>vs last month</span> </div>"))
                // ->color('#004581')
                // ->chartColor('#004581')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make('Delivery', '273')
                ->description('+45% vs last month')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Pending', '108')
                ->description('+25% vs last month')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
        ];
    }
}
