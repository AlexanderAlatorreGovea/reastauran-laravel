<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Message;
 
class MessageController extends Controller
{  
    public function store(){
        request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string', 'max:255']
        ]);
        $message = new Message();
        $message->name = request('name');
        $message->email = request('email');
        $message->phone = request('phone');
        $message->message = request('message');
        $message->save();
       
        return redirect('/reservations/thank-you');
    }
}
