<?php

namespace App\Http\Controllers;

use App\Models\User;

class PublicProfileController extends Controller
{
    public function show(User $user)
    {
        return view('public-profile', [
            'user' => $user,
        ]);
    }
}
