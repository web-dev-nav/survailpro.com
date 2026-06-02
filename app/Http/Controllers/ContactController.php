<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\ContactSetting;

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

        $settings = ContactSetting::first();
        $contactEmail = $settings?->contact_form_recipient_email
            ?: env('CONTACT_EMAIL', 'survailpro@rogers.com');

        Mail::to($contactEmail)->send(new ContactFormMail($data));

        return back()->with('success', 'Thank you for contacting us! We will get back to you shortly.');
    }
}
