<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){

    $posts = [
        ["id"=>1 , "title"=>"post 1" , "content"=>"content of post 1"],
        ["id"=>2 , "title"=>"post 2" , "content"=>"content of post 2"],
        ["id"=>3 , "title"=>"post 3" , "content"=>"content of post 3"]];

        return view("posts" , [
            "name"=>"ahmed" , 
            "age"=>25 , 
            "posts"=>$posts

        ]);
    }
}
