<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DeliveryOrderController extends Controller
{

    public function index()
    {
 $orders= Order::Join('products', 'orders.product_order_id', '=', 'products.id')
   ->where('orders.status','=','wait')     
 ->get(['*']);
   

  

// $orders=Product::all()->where('products.id','product_order_id');





    return view('deliveryorders', compact('orders'));
}
public function create()
{
return view('deliveryorders');
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

public function update($id)
{
    $order=Order::where('orders.product_order_id','=',$id)->get(['*']);
    $product=Product::where('products.id','=',$id)->get(['*']);
// dd($product); 


$UpdateProduct=Product::find($id);

$UpdateProduct->item_category_id=$product[0]->item_category_id;
$UpdateProduct->donater_id=$product[0]->donater_id;
$UpdateProduct->item_name=$product[0]->item_name;
$UpdateProduct->item_description=$product[0]->item_description;
$UpdateProduct->item_image=$product[0]->item_image;
$UpdateProduct->state=$product[0]->state;
$UpdateProduct->status='done';
$UpdateProduct->update();



$UpdateOrders=Order::find($order[0]->id);
$UpdateOrders->product_order_id=$order[0]->product_order_id;
$UpdateOrders->user_order_id=$order[0]->user_order_id;
$UpdateOrders->state=$order[0]->state;
$UpdateOrders->status='done';
$UpdateOrders->update();
return redirect('/deliveryorders')->with('success','Donation has been delivered successfully');
}

    // public function destroy($id)
    // {
       
    // $order=Product::find($id);
    // $order->delete();
    // return redirect('/deliveryorders')->with('success','Donation has been delivered successfully');
    // }
}
