<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User_Detail;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index(){

        $data=User::leftJoin('user__details','user__details.user_detail_id','=','users.id')->where('users.id','=',Auth::user()->id)->get(['*']);


        return view('profile', compact('data'));
    }

    


    // public function create()
    // {
    // return view('profile');
    // }(
    public function showDonations(){
        $products = Product::all();
        $data = array();
        foreach($products as $product){
            if($product["donater_id"] == auth::user()->id){
                array_push($data , $product);
            }
        }
    return view("profileDonation" , compact('data'));
    
    }
    
    
    public function store(Request $request)
    {

    }


    public function showRequests()
{
    $data = array();
    $orders = Order::all();
    foreach($orders as $order){
        if($order["user_order_id"] == Auth::user()->id){
            $order["product_name"] = Product::Find($order["product_order_id"])["item_name"];
            array_push($data , $order);
        }
    }
    return view('requests', compact('data'));
}

    public function edit(User_Detail $account)
{

//     $account=User::where('users.id','=',Auth::user()->id);
//     dd($account);
// return view('profile',compact('account'));
}


    public function update(Request $request)
    {
        
        // $this->validate($request,[
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' =>'required',
        //     'password' => 'required',
        //     'location' => 'required',
        //     'image_name' => 'required',
          
   
        //   ]);

        ;

        $account = User::find(Auth::user()->id);;
        $account->name=$request->input('user_name');
        $account->email=$request->input('user_email');

        $account->password=Hash::make($request->input('password'));

        $account->phone=$request->input('user_mobile');
        $account->location=$request->input('user_address');
        
        $account->image_name=$request->image_name->getClientOriginalName();
        $account->image_path= $request->file('image_name')->storeAs('storage/images',$request->image_name->getClientOriginalName());
        $account->update();

        // $dataUserDetails=User_Detail::where('user_detail_id','=',Auth::user()->id)->get();
    
        // $updateUserDetailes=User_Detail::findOrFail($dataUserDetails[]->id);
        // $updateUserDetailes->user_detail_id=Auth::user()->id;
        // $updateUserDetailes->user_image=$request->input('user_image');
        // $updateUserDetailes->admin_flag=1;
        // $updateUserDetailes->user_address=$request->input('user_address');
        // $updateUserDetailes->update();

        return redirect('profile') 
        ->with('success','Profile Has Been updated successfully');
    }
}
