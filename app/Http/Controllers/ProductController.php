<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function getAllProducts(){
    //     $products = [
    //         ["id" => 1 , "name" => "product 1" , "price" => 100],
    //         ["id" => 2 , "name" => "product 2" , "price" => 200],
    //         ["id" => 3 , "name" => "product 3" , "price" => 300],
    //     ];

    //     return response()->json([ "data" =>$products]);
    // }
 

    public function index(){
        $products = Product::all();
        return view ("product.products",compact("products"));
        return response()->json(["data" => $products]);
    }
    public function showForm(){
        return view("product.store");
    }
    public function store(Request $request){
        Product::create([
            "name"=> $request->name , 
            "price" => $request->price,
            "description" => $request->description
        ]);
        return redirect()->route("products.index");
        return response()->json(["data"=> $request->toArray() , "message" => "product created successfully"]);
    }
    function delete(Request $request, $id){
        // dd($request);
        // $product = new Product();
        Product::find($id)->delete();
        //   $product = Product::find($id);
        //   $product->delete();
        return redirect()->route("products.index");
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update([
            "name"=> $request->name , 
            "price" => $request->price,
            "description" => $request->description
        ]);
        return redirect()->route("products.index");
    }
    public function edit($id){
        $product = Product::find($id);
        return view("product.edit",compact("product"));

    }

}
