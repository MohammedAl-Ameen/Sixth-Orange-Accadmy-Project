<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\productSearch;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productSearch  $productSearch
     * @return \Illuminate\Http\Response
     */
    public function show(productSearch $productSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productSearch  $productSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(productSearch $productSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productSearch  $productSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productSearch $productSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productSearch  $productSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(productSearch $productSearch)
    {
        //
    }

    public function productSearch(Request $request)
    {
         // Get the search value from the request
 $search = $request->input('search');

 // Search in the title and body columns from the posts table
 $products= Category::Join('products', 'products.item_category_id', '=', 'categories.id')
 ->where('products.item_name', 'LIKE', "%{$search}%")
 ->orWhere('products.item_description', 'LIKE', "%{$search}%")
 ->get();
 
//  $products = Product::query()
//      ->where('item_name', 'LIKE', "%{$search}%")
//      ->orWhere('item_description', 'LIKE', "%{$search}%")
//      ->get();

 // Return the search view with the resluts compacted
 
 return view('admin.products', compact('products'));
 
    }

}
