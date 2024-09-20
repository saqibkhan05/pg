<?php

namespace App\Http\Controllers;

use App\Models\popupAd;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function home()
    {
        return view('website.home');
    }

    function about()
    {
        return view('website.about');
    }

    function gallery()
    {
        return view('website.gallery');
    }

    function faq()
    {
        return view('website.faq');
    }

    function contact()
    {
        return view('website.contact');
    }

    function signup()
    {
        return view('website.auth.signup');
    }

    function signin()
    {
        return view('website.auth.signin');
    }

    function termsandconditions()
    {
        return view('website.t_and_c');
    }

    function thanks()
    {
        return view('website.thanks');
    }

    function feedback()
    {
        return view('website.feedback');
    }

    function room_types()
    {
        return view('website.room_types');
    }
    function meals()
    {
        return view('website.meals');
    }

}
