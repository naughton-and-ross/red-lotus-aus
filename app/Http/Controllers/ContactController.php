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
        $name = $details->name;
        $contact = $details->contact;
        $type = $details->subject;
        $comments = $details->text;

        $message = '<html><body>';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
        $message .= "<tr><td><strong>Contact:</strong> </td><td>" . $contact . "</td></tr>";
        $message .= "<tr><td><strong>Subject:</strong> </td><td>" . $type . "</td></tr>";
        $message .= "<tr><td><strong>Comments:</strong> </td><td>" . $comments . "</td></tr>";
        $message .= "</table>";
        $message .= "</body></html>";

        //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS

        $to = 'william.gravette@gmail.com';

        $subject = 'Inquiry for Red Lotus';

        if (mail($to, $subject, $message, $headers)) {
            return redirect('contact');
        } else {
            return redirect('studio');
        }

    }
}
