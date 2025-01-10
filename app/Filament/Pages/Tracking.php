<?php

namespace App\Filament\Pages;

use App\Models\Order;
use Filament\Pages\Page;
use App\Events\RowPreview;
use Filament\Tables\Table;
use App\Livewire\OrdersOverview;
use App\Livewire\TrackingOverview;
use Filament\Tables\Actions\Action;
// use Filament\Tables\Columns\TextColumn;
use App\Livewire\CustomOrdersOverview;
// use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Concerns\InteractsWithTable;

class Tracking extends Page implements HasTable
{

    use InteractsWithTable;

    protected static ?string $navigationIcon = 'hugeicons-location-update-02';

    protected static string $view = 'filament.pages.tracking';

    protected static ?int $navigationSort = 3;

    public $data = null;




    protected function getHeaderWidgets(): array
    {
        return [
                // CustomOrdersOverview::class
            TrackingOverview::class
        ];
    }




    public function getHeaderWidgetsColumns(): int|array
    {
        return 1;
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Order::query())
            ->columns([
                ImageColumn::make('avatar')->label('Customer')
                    ->circular()
                    ->defaultImageUrl(url('/images/default-profile-picture.jpg'))->size(30)
                    ->action(function (Order $record): void {
                        $this->data = $record;
                    }),
                TextColumn::make('order_code')
                    ->action(function (Order $record): void {
                        $this->data = $record;
                    })
                    ->searchable(),
                // TextColumn::make('user.name')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('deliveryMethod.name')
                    ->numeric()
                    ->action(function (Order $record): void {
                        $this->data = $record;
                    })
                    ->sortable(),
                TextColumn::make('status')
                    ->action(function (Order $record): void {
                        $this->data = $record;
                    }),
                TextColumn::make('payment_status')
                    ->action(function (Order $record): void {
                        $this->data = $record;
                    }),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->action(function (Order $record): void {
                        $this->data = $record;
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->action(function (Order $record): void {
                        $this->data = $record;
                    })
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->paginated(false)
            ->filters([
                //
            ])


            ->defaultSort('created_at', 'desc')
        ;
    }

}
