<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class ProductController extends Controller
{
    public function index(Product $product){
        $flag = false;
        $orders = Order::all();
        foreach($orders as $order){
            if($order["user_order_id"] == Auth::user()->id && $product["id"] == $order["product_order_id"]){
                $flag = true;
            }
        }
        return view("product" , compact("product" , "flag"));
    }

    public function add(Product $product , Request $request){

        
        $order = new Order();
        $order->product_order_id = $product->id;
        $order->user_order_id = Auth::user()->id;
        $order->save();


        return redirect("/causes")->with('message' , "Requst sent successfully");
    }


    public function delete(Product $product){
        $product->delete();
        return redirect('/profile-donations');
    }
}
