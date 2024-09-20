<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\PgRoom;
use App\Models\Pg;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    function home($id)
    {
        $rooms = PgRoom::where("pg_id", $id)->withCount('images')->get();
        return view("admin.pg.all_rooms")->with("rooms", $rooms);
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
    public function create($id)
    {
        $pg = Pg::find($id)->first();
        return view("admin.pg.add_room")->with("id", $id)->with('pg_name', $pg->name);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate that the images are an array and each file is a valid image
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $x = (int) $request->input('occupancy');

        $PgRoom = PgRoom::create([
            'pg_id' => $request->input('p_id'),
            'room_name' => $request->input('room_name'),
            'catogory' => $request->input('catogory'),
            'occupancy' => $request->input('occupancy'),
        ]);

        for ($i = $x; $i > 0; $i--) {
            Bed::create([
                'pgroom_id' => $PgRoom->id,
                'cost' => $request->input('cost'),
            ]);
        }

        // Check if files are uploaded
        if ($request->hasFile('images')) {
            // Loop through each uploaded image
            foreach ($request->file('images') as $image) {
                // Store each image and get the path
                $filePath = $image->store('public/images/pg');

                // Save the image path in the database
                $PgRoom->images()->create([
                    'file_path' => $filePath,
                ]);
            }
        }

        return redirect()->route('admin.pg.home');
    }

    /**
     * Display the specified resource.
     */
    public function show_bed(string $id)
    {
        $beds = Bed::where('pgroom_id', $id)->get();
        // dd($beds);
        return view('admin.pg.all_beds')->with('beds', $beds);
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
