<?php

namespace App\Http\Controllers;

use App\Http\Requests\PgCreateRequest;
use App\Models\Pg;
use App\Models\PgAmenity;
use App\Models\PgRoom;
use Illuminate\Http\Request;
use Storage;

class PgController extends Controller
{

    public function home()
    {
        $pgs = Pg::withCount('rooms')->withCount('images')->get();
        // dd($pgs->toArray());
        return view("admin.pg.home")->with("pgs", $pgs);
    }

    public function c_search(Request $request)
    {
        $location = $request->input("location");
        if (isset($location)) {
            # code...
            $pgs = PG::where("location", "like", '%' . $location . '%')->with('rooms.images')->get();

        } else {

            $pgs = Pg::with('rooms.images')->with('rooms.images')->get();
            // dd($pgs->toArray());

            return view("client.pg.home")->with("data", $pgs->toArray());
        }
    }

    public function create()
    {
        $amenities = PgAmenity::orderBy("created_at", "desc")->get();
        return view("admin.pg.create")->with("amenities", $amenities);
    }

    public function store(PgCreateRequest $request)
    {
        $pg = Pg::create([
            "name" => $request->input("name"),
            "address" => $request->input("address"),
            "location" => $request->input("location"),
            "pincode" => $request->input("pincode"),
            "type" => $request->input("type"),
        ]);

        $x = $request->input('amenity');

        $pg->amenities()->attach($x);
        $pg->save();
        // dd($x);

        return redirect()->route("admin.pg.edit", ['id' => $pg->id]);
    }

    public function show(string $id)
    {
        $room = PgRoom::where('id', $id)->with('images')->with('beds')->first();
        // dd($room->toArray());
        return view('client.pg.show')->with('room', $room);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pg = Pg::find($id);
        return view("admin.pg.upload_pg_img")->with("pg", $pg);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function update_img(Request $request, string $id)
    {
        // Validate that the images are an array and each file is a valid image
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // 
        $pg = Pg::find($id);

        // Check if files are uploaded
        if ($request->hasFile('images')) {
            // Loop through each uploaded image
            foreach ($request->file('images') as $image) {
                // Store each image and get the path
                $filePath = $image->store('public/images/pg');

                // Save the image path in the database
                $pg->images()->create([
                    'file_path' => $filePath,
                ]);
            }
        }
        // 
        return redirect()->route('admin.pg.home');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
