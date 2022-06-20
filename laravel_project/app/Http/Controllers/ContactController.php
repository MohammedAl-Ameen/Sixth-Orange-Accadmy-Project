<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {


    return view('contact');

    }


    public function create(){
        return view('contact');
    }

public function store(Request $request){

    $message = new Message();
    $message->message_name= $request->message_name;
    $message->message_email = $request->message_email;
    $message->message= $request->message;
    $message->save();
    return redirect()->route('contact.store')
    ->with('success','Company has been created successfully.');
}

}