<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\{ContactSubmission, Setting, Page};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $page    = Page::where('slug', 'contact')->first();
        return view('frontend.contact', compact('setting', 'page'));
    }

    public function store(Request $request)
    {
         // Honeypot check
    if ($request->filled('website')) {
        abort(403, 'Spam detected.');
    }

     // Prevent very fast bot submissions
    if ((time() - (int) $request->form_started) < 5) {
        return back()
            ->withInput()
            ->withErrors([
                'error' => 'Please take a few seconds to complete the form.'
            ]);
    }
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:20|max:5000',
        ], [
            'name.required'    => 'Your name is required.',
            'email.required'   => 'A valid email address is required.',
            'message.required' => 'Please enter your message.',
            'message.min'      => 'Message must be at least 20 characters.',
        ]);

        // Block disposable email domains
$blocked = [
    'mail.ru',
    'tempmail.com',
    '10minutemail.com',
    'guerrillamail.com',
    'sharklasers.com',
    'mailinator.com',
    'yopmail.com',
    'trashmail.com',
    'getnada.com'
];

$domain = strtolower(substr(strrchr($validated['email'], "@"), 1));

if (in_array($domain, $blocked)) {
    return back()
        ->withInput()
        ->withErrors([
            'email' => 'Disposable email addresses are not allowed.'
        ]);
}

         // Verify Google reCAPTCHA
    $response = Http::asForm()->post(
        'https://www.google.com/recaptcha/api/siteverify',
        [
            'secret'   => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]
    );

    $result = $response->json();

    if (
        !$result['success'] ||
        !isset($result['score']) ||
        $result['score'] < 0.5
    ) {
        return back()
            ->withInput()
            ->withErrors([
                'captcha' => 'Spam detected. Please try again.'
            ]);
    }

    // Prevent duplicate submissions from the same email on the same day
$exists = ContactSubmission::where('email', $validated['email'])
    ->whereDate('created_at', today())
    ->exists();

if ($exists) {
    return back()
        ->withInput()
        ->withErrors([
            'email' => 'You have already submitted an enquiry today. Please wait for our response or try again tomorrow.'
        ]);
}

        ContactSubmission::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'] ?? null,
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
            'status'  => 'new',
        ]);

        return redirect()->route('contact')->with('success', 'Thank you! Your message has been received. We\'ll get back to you within 24 hours.');
    }
}