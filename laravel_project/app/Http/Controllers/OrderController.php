<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function delete(Order $order){
        $order->delete();
        return redirect('/profile-requests');
    }
}
