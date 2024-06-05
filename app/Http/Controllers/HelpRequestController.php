<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelpRequestMail;

class HelpRequestController extends Controller
{
public function sendHelpRequest(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'message' => 'required|string|max:500',
    ]);

    // Check if $data is not null before passing it to the HelpRequestMail constructor
    if ($data) {
        // Send the email
        Mail::to('mghimimi123@gmail.com')->send(new HelpRequestMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    } else {
        return back()->with('error', 'Failed to send the message. Please try again.');
    }
}
}