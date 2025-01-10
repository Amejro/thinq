<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Store extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';

    protected static ?int $navigationSort = 9;

    protected static string $view = 'filament.pages.store';
}
