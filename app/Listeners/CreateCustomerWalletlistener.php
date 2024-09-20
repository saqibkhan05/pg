<?php

namespace App\Listeners;

use App\Events\CompleteCustomerProfileEvent;
use App\Models\Wallet;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateCustomerWalletlistener
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
        Wallet::create([
            'customer_id' => $customer->id,
        ]);
    }
}
