<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\BookingLog;
use App\Models\Customer;
use App\Models\CustomerLog;
use App\Models\Pg;
use App\Models\BookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BookingQuery extends Controller
{
    public function create_booking_request($id)
    {
        $token = Cookie::get('customer_jwt_token');
        $customer = auth()->guard('customer')->setToken($token)->user();

        BookingRequest::create([
            'customer_id' => $customer->id,
            'bed_id' => $id,
        ]);

        return view('client.thanks');
    }

    public function confirm_booking_page($c_id)
    {
        $data = Pg::with('rooms.beds')->get();
        // dd($data->toArray());
        return view('admin.booking.create')->with('c_id', $c_id)->with('data', $data);
    }

    public function confirm_booking(Request $request)
    {
        // Get client id
        $c_id = $request->input('c_id');
        // get customer data
        $customer = Customer::find($c_id);

        // getdata for Log
        $bed2 = Bed::where('id', $request->bedding)->with('pgroom.pg')->get();
        $pg_name = $bed2[0]->pgroom->pg->name;
        $room_name = $bed2[0]->pgroom->room_name;
        $data = $pg_name . " | " . $room_name;

        // update bedding
        $bed = Bed::find($request->bedding);
        $bed->customer_id = $request->input('c_id');
        $bed->status = true;
        $bed->save();

        // update customer
        $customer->status = true;
        $customer->save();

        // Create Booking Log
        $b_log = BookingLog::create([
            "customer_id" => $request->input('c_id'),
            'bed_id' => $request->input('bedding'),
        ]);

        // Create Customer Log
        $log = CustomerLog::create([
            "customer_id" => $request->input('c_id'),
            "title" => $data,
            "description" => 'the cutomer check-in the room',
        ]);

        // redirect 
        return redirect()->route('admin.customer.show', ['id' => $c_id]);

    }

    public function change_room_page($c_id)
    {
        $customer = Customer::find($c_id);
        $data = Pg::with('rooms.beds')->get();
        // dd($data->toArray());
        return view('admin.booking.change')->with('c_id', $c_id)->with('data', $data)->with('customer', $customer);
    }

    public function change_room(Request $request)
    {
        // Get client id
        $c_id = $request->input(key: 'c_id');
        // get customer data
        $customer = Customer::find(id: $c_id);

        // getdata for Log
        $bed2 = Bed::where('id', $request->bedding)->with('pgroom.pg')->get();
        $pg_name = $bed2[0]->pgroom->pg->name;
        $room_name = $bed2[0]->pgroom->room_name;
        $data = $pg_name . " | " . $room_name;

        // update bedding
        $old_bed = Bed::where('customer_id', $c_id)->first();
        $old_bed->customer_id = null;
        $old_bed->status = false;
        $old_bed->save();
        // 
        $new_bed = Bed::find($request->bedding);
        $new_bed->customer_id = $request->input('c_id');
        $new_bed->status = true;
        $new_bed->save();

        // Create Booking Log
        $b_log = BookingLog::create([
            "customer_id" => $request->input('c_id'),
            'bed_id' => $old_bed->id,
            'status' => 'exit'
        ]);
        // 
        $b_log = BookingLog::create([
            "customer_id" => $request->input('c_id'),
            'bed_id' => $request->input('bedding'),
        ]);


        // Create Customer Log
        $log = CustomerLog::create([
            "customer_id" => $request->input('c_id'),
            "title" => $data,
            "description" => 'the cutomer check-in the room',
        ]);


        // redirect 
        return redirect()->route('admin.customer.show', ['id' => $c_id]);
    }
}
