<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Toon contactformulier
    public function index()
    {
        return view('contact');
    }

    // Verwerk contactformulier
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|max:2000',
        ]);

        return redirect('/contact')
            ->with('success', 'Je bericht werd succesvol verzonden.');
    }
}