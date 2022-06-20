<?php

namespace App\Http\Controllers;

use App\Models\adminSearch;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminSearchController extends Controller
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
     * @param  \App\Models\adminSearch  $adminSearch
     * @return \Illuminate\Http\Response
     */
    public function show(adminSearch $adminSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminSearch  $adminSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(adminSearch $adminSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminSearch  $adminSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminSearch $adminSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminSearch  $adminSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminSearch $adminSearch)
    {
        //
    }
    public function SearchCat(Request $request)
    {
         // Get the search value from the request
 $search = $request->input('search');

 // Search in the title and body columns from the posts table
 $categories = Category::query()
     ->where('category_name', 'LIKE', "%{$search}%")
     ->orWhere('category_description', 'LIKE', "%{$search}%")
     ->get();

 // Return the search view with the resluts compacted
 if(count($categories) > 0)
 return view('admin.categories', compact('categories'));
 else return view ('admin.categories', compact('categories'))->with('success','No Details found. Try to search again !');
    }
}




