<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    function send(Request $req){
        $details = [
            'title' => $req->title,
            'body' => $req->body
        ];
        Mail::to('krutchdd@gmail.com')->send(new TestMail($details));
        return back();
    }
}
