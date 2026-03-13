<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();
        return view("photo.index", compact("photos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("photo.upload");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "image" => "required|image"
        ]);
        $imageName = time() . "." . $request->file("image")->getClientOriginalName();
        $request->file("image")->move(public_path("images"), $imageName);
        Photo::create([
            "title" => $request->input("title"),
            "image" => $imageName
        ]);
        return redirect()->route("photos.index");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
