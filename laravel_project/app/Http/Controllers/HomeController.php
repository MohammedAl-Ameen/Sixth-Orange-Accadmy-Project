<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories= Category::orderBy('id','asc')->limit(8)->get();
        $data= Category::Join('products', 'products.item_category_id', '=', 'categories.id')
        ->limit(4)
        ->get(['*']);
        return view('indexx', compact('data','categories'));
    }
}
