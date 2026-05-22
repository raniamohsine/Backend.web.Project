<?php

// ========================================
// Controllers en models importeren
// ========================================

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use App\Models\NewsItem;
use Illuminate\Support\Facades\Route;


// ========================================
// Homepagina
// ========================================

// Toon de homepagina
Route::get('/', function () {
    return view('welcome');
});


// ========================================
// Dashboard pagina
// ========================================

// Toon dashboard voor ingelogde gebruikers
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ========================================
// Profiel routes voor ingelogde gebruikers
// ========================================

Route::middleware('auth')->group(function () {

    // Toon het formulier om profiel te bewerken
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    // Sla profielwijzigingen op
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    // Verwijder het profiel
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


// ========================================
// Publieke profielpagina
// ========================================

// Toon het publieke profiel van een gebruiker
Route::get('/users/{user}', [PublicProfileController::class, 'show'])
    ->name('public.profile');


// ========================================
// Nieuws pagina
// ========================================

// Toon alle nieuwsartikelen
Route::get('/news', function () {

    // Haal alle nieuwsitems op uit de database
    $newsItems = NewsItem::all();

    // Stuur de nieuwsitems naar de view
    return view('news.index', [
        'newsItems' => $newsItems,
    ]);

});


// ========================================
// FAQ pagina
// ========================================

// Toon de FAQ pagina
Route::get('/faq', function () {
    return view('faq');
});


// ========================================
// Contact pagina
// ========================================

// Toon het contactformulier
Route::get('/contact', function () {
    return view('contact');
});


// ========================================
// Authentication routes
// ========================================

// Login, register, forgot password...
require __DIR__.'/auth.php';