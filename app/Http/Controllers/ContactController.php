<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Toon contactformulier
    public function index()
    {
        return view('contact');
    }

    // Verwerk contactformulier en stuur mail naar admin
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|max:2000',
        ]);

        Mail::raw(
            "Naam: " . $request->name . "\n" .
            "Email: " . $request->email . "\n\n" .
            "Bericht:\n" . $request->message,
            function ($mail) {
                $mail->to('admin@ehb.be')
                     ->subject('Nieuw contactbericht');
            }
        );

        return redirect('/contact')
            ->with('success', 'Je bericht werd succesvol verzonden naar de admin.');
    }
}