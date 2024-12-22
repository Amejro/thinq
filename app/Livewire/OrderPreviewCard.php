<?php

namespace App\Livewire;

use Livewire\Component;

class OrderPreviewCard extends Component
{



    // public function previewRow($recordId)
    // {
    //     // Fetch the record data or handle as needed
    //     $this->data = \App\Models\Order::find($recordId);
    // }


    public function render()
    {
        return <<<'HTML'
        <div >
            Hello from OrderPreviewCard  
            
        </div>
        HTML;
    }
}
