<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;


// Rutas para sitio web

    // Pagina de aterrizaje
    Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
    // Nosotros
    Route::get('/nosotros', [WebsiteController::class, 'about'])->name('website.about');
    // Emprendedores
    Route::get('/emprendedores', [WebsiteController::class, 'entrepreneurs'])->name('website.entrepreneurs');
    // Empresas
    Route::get('/empresas', [WebsiteController::class, 'companies'])->name('website.companies');
    // Blog y recursos
    Route::get('/blog', [WebsiteController::class, 'blog'])->name('website.blog');
    // Contacto
    Route::get('/contacto', [WebsiteController::class, 'contact'])->name('website.contact');
    // Política de privacidad
    Route::get('/politica-de-privacidad', [WebsiteController::class, 'privacy'])->name('website.privacy');

// Terminan rutas para sitio web


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
