<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class adminOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders= Order::Join('users' ,'orders.user_order_id','=','users.id')
        ->Join('products','orders.product_order_id' ,'=','products.id')
        ->get(['orders.id' ,'users.name', 'products.item_name','orders.created_at']);

    // dd($orders[0]);
        return view('admin.orders',compact('orders'))
            ->with(request()->input('page'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $products=Product::all();
        return view('admin.addOrder',compact('users','products'));
         }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'userName' => 'required',
        //     'product' => 'required',
        //     'oname'=>'required',
        //     'odescription'=>'required',
            
        // ]);


         $order= new Order();
         $order->product_order_id=$request->input('product');
         $order->user_order_id=$request->input('userName');
         $order->order_name=$request->input('oname');
         $order->order_description=$request->input('odescription');
         

         if($request->hasfile('image'))
         {
             $file = $request->file('image');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('public/adminImage/', $filename);
             $order->order_image = $filename;
         }

        $order->save();


        return redirect()->route('order.index')->with('success','Order added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::where('id', $id)->first();
        $users=User::all();
        $products=Product::all();
        return view('admin.editOrder',compact('order','users','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'userName' => 'required',
            'product' => 'required',
            // 'oname'=>'required',
            'odescription'=>'required',
            
        ]);

        $order = new Order();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('storage/images/', $filename);
            $order->order_image = $filename;
        }

        Order::where('id',$id)->update([
            // 'order_name'=>$request->oname,
            'order_description'=>$request->odescription,
            'order_image'=> $order->order_image,
            'product_order_id'=>$request->product,
            'product_user_id'=>$request->userName,
        ]);
        
         return redirect()->route('order.index')->with('success','Order edited successfully.');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Order::find($id);
        $delete->delete();
        return redirect()->route('order.index')
                        ->with('success','Order deleted successfully');
    
    }
}
