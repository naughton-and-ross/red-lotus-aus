<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSent;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function sendEmail(Request $details)
    {
        Mail::to('william.gravette@gmail.com')->send(new ContactSent($details));
    }
}
