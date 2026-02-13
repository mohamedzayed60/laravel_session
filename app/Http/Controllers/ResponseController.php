<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index(){
        return response()->json([
            "name"=>"Mohamed",
            "age"=>30,
            "email"=>"mohamed@example.com"
        ]);

        

        // return response("Hello World",200);
        // return response()->json([
        //     "name"=>"Mohamed",
        //     "age"=>30,
        //     "email"=>"mohamed@example.com"
        // ]);
    }

    public function redirect(){
        return view("welcome");
        return redirect("https://gemini.google.com/app");
    }
}
