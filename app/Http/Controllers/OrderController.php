<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getAll(){
        return "get all orders";

    }
    public function getById($id){
        return "get order by id : " . $id;

    }
     public function store(){
        return "store function";

    }
}
