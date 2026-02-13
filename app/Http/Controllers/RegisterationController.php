<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    public function register(){
        $name ="mohamed";
        return "register function in RegisterationController with name: " . $name;
    }
}
