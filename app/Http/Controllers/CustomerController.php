<?php

namespace App\Http\Controllers;

use App\Events\SendOtpEvent;
use App\Http\Requests\CustomerCreaterequest;
use App\Http\Requests\CustomerLoginRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $token = Cookie::get('customer_jwt_token');
        $customer = auth()->guard('customer')->setToken($token)->user();
        return view("client.dashboard")->with("user_details", $customer);
    }

    public function all_customers()
    {
        $data = Customer::all();

        return view("admin.customer.home")->with("data", $data);
    }

    public function view()
    {
        return view("admin.customer.profile");
    }
    //   Login
    public function login(CustomerLoginRequest $request)
    {
        // validation
        $validated = $request->validated();

        if (!$token = auth()->guard('customer')->attempt($validated)) {
            session()->flash('login_unauthorised', 'unauthorised user');
            return redirect()->back();
        }
        // Save JWT token in a cookie
        $cookie = Cookie::make('customer_jwt_token', $token, 60 * 24 * 365); // Valid for 365 days | 1 Year
        return redirect()->route('customer.dashboard')->withCookie(cookie: $cookie);
    }

    //   logout
    public function logout()
    {
        $token = Cookie::get('customer_jwt_token');
        $customer = auth()->guard('customer')->setToken($token)->user();
        $cookie = Cookie::forget('customer_jwt_token');
        return redirect()->route('signin')->withCookie(cookie: $cookie);
    }

    // tokken responce
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 525600,
        ]);
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CustomerCreaterequest $request)
    {
        // validation and create customer in DB
        $validated = $request->validated();
        $customer = Customer::create($validated);
        // Create Sessions
        session(['customer_id' => $customer->id]);
        session(['customer_email' => $customer->email]);
        session(['customer_phone' => $customer->phone]);
        // Send OTP event
        event(new SendOtpEvent($customer));
        // retun OTP verify page
        return redirect()->route("customer.verify_p");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::where('id', $id)->with('wallet')->with('customerLogs')->get();
        // $customer = Customer::where('id', $id)->get();
        // dd($customer->toArray());
        if ($customer) {
            return view("admin.customer.profile")->with("customer", $customer[0]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
