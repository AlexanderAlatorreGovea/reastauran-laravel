<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail; 
use App\Mail\SendMail;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function sendEmail(Request $request) {
        $this->validate($request, [
            'email' => 'required | email'
        ]);

        $data = array(
            'email' => $request->email
        );

        Mail::to('ariscopedro@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us, we have received your email!');
    }
}
 