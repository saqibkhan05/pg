<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    function signin_p()
    {
        return view('admin.auth.login');
    }

    function signin(AdminLoginRequest $request)
    {
        // validation
        $validated = $request->validated();
        // dd($validated);

        if (!$token = auth()->guard('admin')->attempt($validated)) {
            session()->flash('login_unauthorised', 'unauthorised user');
            return redirect()->back();
        }
        // Save JWT token in a cookie
        $cookie = Cookie::make('admin_jwt_token', $token, 60 * 24 * 365); // Valid for 365 days | 1 Year
        // redirect to dashboard
        return redirect()->route('admin.dashboard')->withCookie(cookie: $cookie);
    }

    function logout()
    {
        $token = Cookie::get('admin_jwt_token');
        $customer = auth()->guard('admin')->setToken($token)->user();
        $cookie = Cookie::forget('admin_jwt_token');
        return redirect()->route('admin.signin_p')->withCookie(cookie: $cookie);
    }
}
