<?php

namespace App\Http\Controllers;

use App\Events\CompleteCustomerProfileEvent;
use App\Events\SendOtpEvent;
use App\Http\Requests\Otprequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class OtpVerificationController extends Controller
{
    function verify_p()
    {
        return view('website.auth.verify');
    }

    function sendotp()
    {
        // get client deatail via Session
        $customer_id = session('customer_id');
        $customer = Customer::find($customer_id);
        // Send OTP event
        event(new SendOtpEvent($customer));
        // retun OTP verify page
        return redirect()->route("customer.verify_p");
    }

    function verify(Otprequest $request)
    {
        $customer_id = session('customer_id');
        $customer = Customer::find($customer_id);

        if ($customer->otp === $request->otp) {
            // OTP is correct
            $customer->otp = null;          // Clear OTP
            $customer->otp_verified = true;     // Customer verified
            $customer->save();
            // Complete Profile
            event(new CompleteCustomerProfileEvent($customer));
            // return to login page
            return redirect()->route('signin');
        } else {
            session()->flash('error', 'OTP is Invalid');
            return redirect()->back();
        }
    }
}
