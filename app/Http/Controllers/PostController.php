<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "All Posts";
    }
    public function show($id){
        return "Post id is : " . $id;
    }
}
