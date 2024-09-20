<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenityCreateRequest;
use App\Models\PgAmenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AmenityController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PgAmenity = PgAmenity::orderBy("created_at", "desc")->get();
        return view("admin.amenity.home")->with("data", $PgAmenity);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.amenity.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AmenityCreateRequest $request)
    {
        $validated = $request->validated();

        $amenity = PgAmenity::create($validated);


        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file(key: 'image');
            $imagePath = $image->store('images/amenity', 'public'); // Store image in 'public/images/amenity'

            // Save the path to the dataBase in Image table
            $amenity->images()->create([
                'file_path' => $imagePath
            ]);
        }

        return redirect()->route("admin.amenity.home");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $amenity = PgAmenity::find($id);

        if ($amenity->images()->exists()) {
            $images = $amenity->images->map(function ($image) {
                return [
                    'id' => $image->id,
                    'url' => url(Storage::url($image->file_path))
                ];
            });
            return view("admin.amenity.edit")->with("data", $amenity)->with('image', $images[0]['url']);
        }

        return view("admin.amenity.edit")->with("data", $amenity);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $amenity = PgAmenity::find($id);

        // Validate the request
        $request->validate([
            'name' => ['required', 'max:200', 'unique:pg_amenities,name,' . $amenity->id],
            'cost' => ['required', 'numeric', 'gt:-1'],
        ]);


        $amenity->name = $request->name;
        $amenity->cost = $request->cost;
        $amenity->save();

        return redirect()->route("admin.amenity.home");
    }

    public function update_img(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the new image
        ]);

        $amenity = PgAmenity::find($id);
        if ($amenity->images()->exists()) {
            // Get the current image path
            $oldImage = $amenity->images->first()->file_path;

            // Delete the old image from storage
            if (Storage::exists($oldImage)) {
                Storage::delete($oldImage);
            }
            // Remove the old image from the database
            $amenity->images()->delete();
        }

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file(key: 'image');
            $imagePath = $image->store('images/amenity', 'public'); // Store image in 'public/images/amenity'

            // Save the path to the dataBase in Image table
            $amenity->images()->create([
                'file_path' => $imagePath
            ]);
        }

        return redirect()->route("admin.amenity.home");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $amenity = PgAmenity::find($id);
        $amenity->delete();
        return redirect()->route("admin.amenity.home");
    }
}
