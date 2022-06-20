<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
class IndexxController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(5);
      

    $categories= Category::orderBy('id','asc')->limit(8)->get();


    $data= Category::Join('products', 'products.item_category_id', '=', 'categories.id')->where ('state',1)
    ->where('products.status','=','wait') 
    ->limit(4)
    ->get(['*']);
// dd($products);
    return view('indexx', compact('data','categories','users'));

    }






}
