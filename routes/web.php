<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use App\Models\User;
use App\Models\NewsItem;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin-test', function () {
    return 'Welkom admin';
})->middleware(['auth', 'admin']);

Route::get('/profile-test', function () {
    $user = User::where('email', 'admin@ehb.be')->first();

    return [
        'name' => $user->name,
        'favorite_team' => $user->profile->favorite_team,
        'bio' => $user->profile->bio,
    ];
});

Route::get('/users/{user}', [PublicProfileController::class, 'show'])
    ->name('public.profile');

    Route::get('/news', function () {
        $newsItems = NewsItem::all();

        return view('news.index', [
            'newsItems' => $newsItems,
        ]);
    });

      Route::get('/faq', function () {
        return view('faq');
      });
    
      Route::get('/contact', function () {
        return view('contact');
      });