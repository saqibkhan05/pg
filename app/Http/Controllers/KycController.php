<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadKycRequest;
use App\Models\Customer;
use App\Models\Kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class KycController extends Controller
{
    public function my_kyc()
    {
        // get Customer from token
        $token = Cookie::get('customer_jwt_token');
        $customer = auth()->guard('customer')->setToken($token)->user();
        // get Kyc recourd by customer id
        $kyc = Kyc::where('customer_id', $customer->id)->get();
        return view("client.kyc.home")->with("kyc", $kyc);
    }

    public function upload_my_kyc(UploadKycRequest $request)
    {
        $validated = $request->validated();

        // Find the record by its ID
        $item = Kyc::findOrFail($request->id);

        // Handle file upload
        if ($request->hasFile('docs')) {
            $docs = $request->file(key: 'docs');
            $docsPath = $docs->store('images/kyc_docs', 'public'); // Store image in 'public/images/kyc_docs'
            $validated['docs_path'] = $docsPath; // Save the path to the validated data
        }

        $item->docs = $validated['docs_path'];
        $item->save();
        return back()->with('success', 'success');
    }
    public function showall()
    {
        $pending = Kyc::where('status', false)->count();
        return view('admin.kyc.home')->with('pending', $pending);
    }

    public function show(string $c_id)
    {
        $data = Kyc::where('customer_id', $c_id)->get();
        return view('admin.kyc.show')->with('data', $data)->with('c_id', $c_id);
    }

    public function showdoc($id)
    {
        $data = Kyc::where('id', $id)->get()->map(callback: function ($item) {
            $item->image_url = $item->docs ? url('storage/' . $item->docs) : null;
            return $item;
        });
        return view('admin.kyc.showdoc')->with('data', $data);
    }

    public function acceptdoc($id)
    {
        $kyc = Kyc::where('id', $id)->first();
        $kyc->status = true;
        $kyc->save();

        return redirect()->route('admin.kyc.show', ['c_id' => $kyc->customer_id])->with('success', '');
    }

    public function rejectdoc($id)
    {
        $kyc = Kyc::where('id', $id)->first();
        return redirect()->route('admin.kyc.show', ['c_id' => $kyc->customer_id])->with('success', '');
    }
    public function kyc_pass($id)
    {
        $Customer = Customer::where('id', $id)->first();
        $Customer->kyc_verified = true;
        $Customer->save();
        session()->flash('user_v', 'true');
        return redirect()->back();
    }

    public function create($id)
    {
        return view('admin.kyc.create')->with('c_id', $id);
    }

    public function store(Request $request)
    {
        $client_id = $request->input('client_id');
        $document = $request->input('document');

        Kyc::create([
            'customer_id' => $client_id,
            'name' => $document,
        ]);
        return redirect()->route('admin.kyc.show', ['c_id' => $client_id])->with('c_id', $client_id);
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
