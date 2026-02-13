<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormResourseRequest;
use Illuminate\Http\Request;

class FormResourseController extends Controller
{
    public function index(){
        return view("form");
    }
    public function store(FormResourseRequest $request){
        $request->validated();


        // return $request->has("name");
        $name =$request->input("name") ;
        $email =$request->input("email") ;
        return "name is : " . $name . " and email is : " . $email;
        // return $request->all();
    }
}
