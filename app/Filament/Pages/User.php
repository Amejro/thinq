<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class User extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?int $navigationSort = 8;

    protected static string $view = 'filament.pages.user';
}
