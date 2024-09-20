<?php

namespace App\Listeners;

use App\Events\CompleteCustomerProfileEvent;
use App\Models\CustomerLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateCustomerFirstLog
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
    public function handle(CompleteCustomerProfileEvent $event): void
    {

        $customer = $event->customer;

        $log = CustomerLog::create([
            "customer_id" => $customer->id,
            "title" => 'signup',
        ]);
    }
}
