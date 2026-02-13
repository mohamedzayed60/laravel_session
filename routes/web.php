<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterationController;





Route::get('/', function () {
    return view('welcome');
});

Route::get("/test", function () {
    return view("test");
});


Route::get("store" , [UserController::class , "index"])->name("index");


Route::get("users/{id}" , function($id = null){

    return 'the user id is :  ' . $id;
});


Route::any("any-test", function(){
    return "any method route";
});

Route::match(["GET","POST"],"match-route",function(){
    return "match method route";
})->name("");



Route::get("here" , function(){
    return "here route"; 
});


Route::get("there" , function(){
    return "there route"; 
});



Route::redirect("here" , "there");

Route::view("test-view" , "test");

Route::prefix("admin")->group(function(){

    Route::get("index" , [AdminController::class , "index"]);
    Route::get("getform",[AdminController::class , "getform"]);
    Route::post("submit" ,[AdminController::class ,"submit"]);

});



Route::controller(OrderController::class)->group(function(){

    Route::get("ordegetall" , "getAll");
    Route::get("getone/{id}" , "getById");
    Route::get("store" , "store");

});


Route::domain("admin.example.com")->group(function(){
    Route::get("test-admai" , function(){
        return "test domain route";
    });

});

Route::get("/login" , action: [LoginController::class , "login"]);

Route::get("/register" , action: [RegisterationController::class , "register"]);

Route::get("hello" , function(){

    return "hello route 3";

})->name("hello");


/*
1 
2
3

git revert 
4 733c5fd

5


*/