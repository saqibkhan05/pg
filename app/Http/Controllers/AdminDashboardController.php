<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AdminDashboardController extends Controller
{
    function dashboard()
    {
        $token = Cookie::get('admin_jwt_token');
        $customer = auth()->guard('admin')->setToken($token)->user();
        
        return view("admin.dashboard")->with("user_details", $customer);
    }
}
