<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;    

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



    public function insert(){
       $order=  Order::create([
            "customer_name" => "mohamed",
            "total" => 100,
        ]);
        OrderItem::create([
            "order_id" => $order->id,
            "product_name" => "Book",
            "price" => 50,
            "quantity" => 2,
        ]);

        OrderItem::create([
            "order_id" => $order->id,
            "product_name" => "laptop",
            "price" => 70,
            "quantity" => 4,
        ]);
    }
    public function getOrderWithItems($id){
        $order = Order::with("items")->find($id);
        return response()->json(["data" => $order]);
    }


}
