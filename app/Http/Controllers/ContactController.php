<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
            'service' => ['required', 'string'],
            'message' => ['required', 'string', 'max:1000'],
        ]);

        $contactEmail = env('CONTACT_EMAIL', 'info@survailpro.ca');

        Mail::to($contactEmail)->send(new ContactFormMail($data));

        return back()->with('success', 'Thank you for contacting us! We will get back to you shortly.');
    }
}
