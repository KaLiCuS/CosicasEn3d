<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        // Here you will handle the form submission, like validating input and sending emails.
        return back()->with('success', 'Thank you for your message!');
    }
}

?>