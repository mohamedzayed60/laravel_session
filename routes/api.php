<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


route::get("test" , function(){
    return "test route";
});


// Route::get("products" , [ProductController::class , "getAllProducts"])->name("products.all");
