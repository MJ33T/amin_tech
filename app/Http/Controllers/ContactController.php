<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function send_message(Request $req){
        $message = new Contact;
        $message->name = $req->name;
        $message->email = $req->email;
        $message->subject = $req->subject;
        $message->message = $req->message;
        $message->save();
        return redirect('/');
    }
}
