<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Setting extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';
    protected static ?int $navigationSort = 10;
    protected static string $view = 'filament.pages.setting';
}
