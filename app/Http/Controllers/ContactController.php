<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use App\Filament\Resources\ContactResource;
use App\Notifications\ContactFormSubmitted;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke database
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Your message has been sent!');
        // return redirect()->route('front.home')->with('success', 'Thank you! I already receive your message.');

    }
}