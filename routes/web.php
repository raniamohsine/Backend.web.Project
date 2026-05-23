<?php

// ========================================
// Controllers importeren
// ========================================
use App\Http\Controllers\FaqItemController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsItemController;
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

// Verwerk contactformulier
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


// ========================================
// Admin dashboard
// ========================================

// Alleen admins hebben toegang
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');


// ========================================
// Admin nieuws CRUD
// ========================================

// Alleen admins kunnen nieuws beheren
Route::resource('/admin/news', NewsItemController::class)
    ->middleware(['auth', 'admin'])
    ->names('admin.news');

// ========================================
// Admin FAQ CRUD
// ========================================

// Alleen admins kunnen FAQ beheren
Route::resource('/admin/faq', FaqItemController::class)
    ->middleware(['auth', 'admin'])
    ->names('admin.faq');

// ========================================
// Authentication routes
// ========================================

// Login, register, forgot password...
require __DIR__.'/auth.php';