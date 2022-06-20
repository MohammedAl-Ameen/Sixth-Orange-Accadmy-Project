<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    public function index()
    {
 $orders= Product::Join('orders', 'orders.product_order_id', '=', 'products.id')
        ->get(['*']);
        
    $data=User::where('users.id','=',Auth::user()->id)->get();


    $orders= Product::Join('orders', 'orders.product_order_id', '=', 'products.id')
    ->join('users', 'user_order_id', '=', 'orders.id')
    ->get(['*']); 


    return view('delivery', compact('data','orders'));
}





public function create()
{
return view('delivery');
}



public function store(Request $request)
{

$delivery = new Delivery();
$delivery->user_delivery_id=Auth::user()->id;
$delivery->delivery_flag =2;
$delivery->delivery_password = 555555555555555;
$delivery->delivery_name = Auth::user()->name;
$delivery->delivery_lname = $request->delivery_lname;
$delivery->delivery_email = Auth::user()->email;
$delivery->delivery_address = $request->delivery_address;
$delivery->delivery_mobile = $request->delivery_mobile;
$delivery->delivery_message = $request->delivery_message;
$delivery->save();

return redirect()->route('deliveryorders.store')
->with('success','You are now a delivery volunteer.');
}






}