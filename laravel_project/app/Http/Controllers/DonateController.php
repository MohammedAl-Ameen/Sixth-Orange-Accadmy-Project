<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DonateController extends Controller
{
    public function index()
    {
        $data['users'] = User::orderBy('id','desc')->paginate(5);
        return view('indexx', $data);
        } 
}
