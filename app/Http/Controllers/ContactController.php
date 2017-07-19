<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewBandInquiry;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function sendEmail(Request $details)
    {

        Mail::to('william.gravette@gmail.com')->send(new NewBandInquiry($details));


        // $name = $details->name;
        // $contact = $details->contact;
        // $type = $details->subject;
        // $comments = $details->text;
        //
        // $message = '<html><body>';
        // $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        // $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
        // $message .= "<tr><td><strong>Contact:</strong> </td><td>" . $contact . "</td></tr>";
        // $message .= "<tr><td><strong>Subject:</strong> </td><td>" . $type . "</td></tr>";
        // $message .= "<tr><td><strong>Other Comments:</strong> </td><td>" . $comments . "</td></tr>";
        // $message .= "</table>";
        // $message .= "</body></html>";
        //
        // $to = 'william.gravette@gmail.com';
        //
        // $subject = 'Inquiry for Red Lotus';
        //
        // $headers = "From: " . "Red Lotus Website" . "\r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        //
        // if (mail($to, $subject, $message, $headers)) {
        //     return redirect('contact')->with('status', 'Your message has been sent!');
        // } else {
        //     return redirect('contact');
        // }

    }
}
