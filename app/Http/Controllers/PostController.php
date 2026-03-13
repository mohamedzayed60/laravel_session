<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //to get all posts
    public function index(){
        return  response()->json(Post::all());
    }

    //to get post by id
    public function show($id){
        $post = Post::find($id);
        if(!$post){
            return response()->json(["message" => "Post not found"], 404);
        }
        return response()->json($post);
    }

    //to create new post
    public function store(Request $request){
        $request->validate([
            "title" => "required",
            "content" => "required"
        ]);

        $post = Post::create([
            "title" => $request->input("title"),
            "content" => $request->input("content")
        ]);
        return response()->json($post , 201);
    }
    public function destroy($id){
        $post = Post::find($id);
        if(!$post){
            return response()->json(["message" => "Post not found"], 404);
        }

        $post->delete();

        return response()->json(["message" => "Post deleted successfully"]);
    }
    //update post by id 
    public function update(Request $request , $id){
       $post= Post::find($id);
       if(!$post){
        return response()->json(["message" => "Post not found"], 404);
       }
        $post->update([
            "title" => $request->input("title"),
            "content" => $request->input("content")
        ]);
        
        return response()->json($post , 201);
    }

}
