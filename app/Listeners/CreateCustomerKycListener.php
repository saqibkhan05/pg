<?php

namespace App\Listeners;

use App\Events\CompleteCustomerProfileEvent;
use App\Models\Kyc;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateCustomerKycListener
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
        Kyc::create([
            'customer_id' => $customer->id,
            'name' => 'Aadhar',
        ]);
        Kyc::create([
            'customer_id' => $customer->id,
            'name' => 'PAN',
        ]);
        Kyc::create([
            'customer_id' => $customer->id,
            'name' => 'Driving Licence',
        ]);
    }
}
