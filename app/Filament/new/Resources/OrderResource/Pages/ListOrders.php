<?php

namespace App\Filament\Resources\OrderResource\Pages;

use Filament\Actions;
use App\Livewire\OrdersOverview;
use App\Filament\Resources\OrderResource;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected static string $view = 'filament.pages.orders';

    protected function getHeaderWidgets(): array
    {
        return [
                // CustomOrdersOverview::class
            OrdersOverview::class
        ];
    }

    public function getHeaderWidgetsColumns(): int|array
    {
        return 3;
    }



    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
