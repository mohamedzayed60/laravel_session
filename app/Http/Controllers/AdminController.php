<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function  index()
    {
        return view("admin.index");
    }

    public function getform()
    {
        return view("admin.getform");
    }

    public function submit(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");


        return "the name is : " . $name . " the email is : " . $email . " the password is : " . $password   ;
    }
}
