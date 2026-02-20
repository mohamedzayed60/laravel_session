<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacadeDBController extends Controller
{
    public function insertIntoUserTable(){
        DB::table("users")->insert([
            "name"=>"Ahmed", 
            "email"=>"ahmed2@gmail.com" , 
            "password"=> encrypt("2333"),
        ]);

        return "data inserted successfully";
    }
    public function getAllUsers(){
       $users = DB::table("users")->get();
       return $users;
    }
    public function getById($id){
        // return $id;
        $user = DB::table("users")->where("id" , $id)->get();
        return $user;
    }
    public function updateUser($id){
        DB::table("users")->where("id", $id)->update([
            "name"=>"Updated Name",
            "email"=>"updated@example.com"
        ]);
        return "User updated successfully";
    }
    public function deleteUser($id){
        DB::table("users")->where("id", $id)->delete();
        return "User deleted successfully";
    }
    public function rawSelect(){
        $users = DB::select("SELECT * from users where id = ?" , [1]);
        return $users;
    }
    public function insertUser(){
        DB::insert("insert into users (name , email , password) VALUES(? , ? , ?)", [
            "Mohamed",
            "mohamed233@example.com",
            encrypt("12234")
        ]);
    }
    public function getUsersWithPosts(){
            return DB::table("users")
            ->join("posts" , "users.id" , "=" , "posts.user_id")
                    ->select("users.*" , "posts.*")->get();
    }
    
}
