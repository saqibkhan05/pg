<?php

namespace App\Http\Controllers;

use App\Models\BookingRequest;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function booking_queries()
    {
        $booking_queries = BookingRequest::with('customer')->with('bed.pgroom.pg')->orderBy('created_at', 'desc')->get();
        // dd($booking_queries->toArray());
        return view("admin.notifications.home")->with("data", $booking_queries);
    }

    public function destroy()
    {
        // 
    }
}
