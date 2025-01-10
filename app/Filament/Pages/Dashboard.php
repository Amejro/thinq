<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Livewire\CustomOrdersOverview;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 1;

    protected static string $view = 'filament.pages.dashboard';

    // public function getHeaderWidgetsColumns(): int|array
    // {
    //     return 3;
    // }

    protected function getHeaderWidgets(): array
    {
        return [
            CustomOrdersOverview::class

        ];
    }

}
