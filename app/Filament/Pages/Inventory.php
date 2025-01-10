<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Inventory extends Page
{
    protected static ?string $navigationIcon = 'iconoir-clipboard-check';
    protected static ?int $navigationSort = 5;

    protected static string $view = 'filament.pages.inventory';
}
