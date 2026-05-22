<?php

// ========================================
// Controllers importeren
// ========================================

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;

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

    // Toon profiel bewerken pagina
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    // Sla profielwijzigingen op
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    // Verwijder profiel
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


// ========================================
// Publieke profielpagina
// ========================================

// Toon publiek profiel van gebruiker
Route::get('/users/{user}', [PublicProfileController::class, 'show'])
    ->name('public.profile');


// ========================================
// Nieuws pagina
// ========================================

// Toon alle nieuwsartikelen
Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');


// ========================================
// FAQ pagina
// ========================================

// Toon FAQ pagina
Route::get('/faq', [FaqController::class, 'index'])
    ->name('faq.index');


// ========================================
// Contact pagina
// ========================================

// Toon contactformulier
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');


// ========================================
// Authentication routes
// ========================================

// Login, register, forgot password...
require __DIR__.'/auth.php';