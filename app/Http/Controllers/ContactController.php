<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request){
        Mail::to('samia.m.hassouna@gmail.com')->send(new ContactMail($request->name, $request->email, $request->body));
        return redirect()->back();
    }
}
