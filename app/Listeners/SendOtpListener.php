<?php

namespace App\Listeners;

use App\Events\SendOtpEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtpMail;

class SendOtpListener
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
    public function handle(SendOtpEvent $event): void
    {
        $customer = $event->customer;
        $otp = 999999;
        // $otp = rand(100000, 999999); // Generate 6-digit numerical OTP

        // Save OTP to the user's record or a separate table
        $customer->otp = $otp;
        $customer->save();

        // Send OTP via email
        // Mail::to($customer->email)->send(new SendOtpMail($customer, $otp));
    }
}
