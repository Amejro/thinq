<?php

namespace App\Livewire;

use Filament\Widgets\Widget;

class CustomOrdersOverview extends Widget
{
    protected static string $view = 'livewire.custom-orders-overview';

    public $stats = [];
}
