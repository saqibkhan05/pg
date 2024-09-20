<?php

namespace App\Http\Controllers;

use App\Models\popupAd;
use Illuminate\Http\Request;

class PopupQueryController extends Controller
{
    function all_popup_ad_queries()
    {
        $all_popup_ad_queries = popupAd::all();
        return view('admin.PopupQueries.AllQueries')->with('queries', $all_popup_ad_queries);
    }


    function popup_ad_Register(Request $request)
    {
        // Validate and save the form data
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone_number' => 'required|string|min:10',
        ]);

        $ad = popupAd::create($data);

        $cooki_data = json_encode($data);
        return redirect()->route('thanks')->withCookie(cookie('popupfilled', $cooki_data, 60 * 24 * 30));
    }

}
