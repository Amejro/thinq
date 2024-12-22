<?php

namespace App\Listeners;

use App\Events\RowPreview;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendRowPreviewNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(RowPreview $event): void
    {
        info('Row preview event fired');
    }
}
