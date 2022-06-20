<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AddProfileController extends Controller
{
 
public function index()
{
    
    $categories= Category::orderBy('id','asc')->get();

    $products= Category::Join('products', 'products.item_category_id', '=', 'categories.id')
      
    ->get(['*']);
    
    return view('addprofile',compact('products','categories'));
     
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    $categories=Category::all();
    return view('addprofile',compact('categories'));
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

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

public function edit()
{


}


public function store(Request $request)
{

    $request->file('item_image')->storeAs('storage/images/',$request->item_image->getClientOriginalName());
    
    $product = new Product();
    $product->donater_id=Auth::user()->id; 
    $product->state=0;
    $product->item_category_id=$request->input('category');
    $product->item_name=$request->input('item_name');
    $product->item_description=$request->input('item_description');  
    $product->item_image=$request->file('item_image')->getClientOriginalName();
    $product->save();

    return redirect('addprofile') 
    ->with('success','Profile Has Been updated successfully');
}

}
