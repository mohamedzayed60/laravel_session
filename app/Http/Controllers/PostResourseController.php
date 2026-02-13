<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostResourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "All Posts";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create Post Form";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store Post";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Post id is : " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Edit Post Form for id : " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update Post with id : " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "delete Post with id : " . $id;
    }
}
