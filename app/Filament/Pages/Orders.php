<?php

namespace App\Filament\Pages;

use App\Models\Order;
use Filament\Pages\Page;
use Filament\Tables\Table;
use App\Livewire\OrdersOverview;
use App\Livewire\CustomOrdersOverview;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Concerns\InteractsWithTable;

class Orders extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $navigationIcon = 'pepicon-pen-circle';
    protected static ?string $model = Order::class;

    // public $stats = [];

    protected static string $view = 'filament.pages.orders';

    protected function getHeaderWidgets(): array
    {
        return [
            CustomOrdersOverview::class
            // OrdersOverview::class
        ];
    }

    // public function getWidgetData(): array
    // {
    //     return [
    //         'stats' => [
    //             'total' => 100,
    //         ],


    //     ];
    // }

    public function getHeaderWidgetsColumns(): int|array
    {
        return 3;
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Order::query())
            ->columns([
                ImageColumn::make('avatar')->label('Customer')->circular()->defaultImageUrl(url('/images/default-profile-picture.jpg'))->size(30),
                TextColumn::make('order_code')->label('Order ID'),
                TextColumn::make('created_at')->label('Date'),
                TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
        ;
    }
}
