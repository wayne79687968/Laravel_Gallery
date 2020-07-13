<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {

    $data = [
        'name' => $request->lname . $request->fname,
        'email' => $request->email,
        'subject' => $request->subject,
        'content' => $request->content
    ];
    Mail::send('emails.sendtemplate', $data, function($message){
        $message->to('wayne79687968@gmail.com', 'Skogkatt')->subject('Skogkatt Photo');
    });
    return back();
    }
}
