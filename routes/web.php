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
    Route::get('/paginas-web-para-emprendedores', [WebsiteController::class, 'entrepreneurs'])->name('website.entrepreneurs');
    // Empresas
    Route::get('/software-para-empresas', [WebsiteController::class, 'companies'])->name('website.companies');
    // Aplicaciones Web Personalizadas
    Route::get('/aplicaciones-web-personalizadas', [WebsiteController::class, 'customApps'])->name('website.customApps');
    // Desarrollo de software
    Route::get('/desarrollo-de-software', [WebsiteController::class, 'software'])->name('website.software');
    // Paginas web
    Route::get('/paginas-web', [WebsiteController::class, 'webPages'])->name('website.webPages');
    // Servicios de consultoria
    Route::get('/servicios-de-consultoria', [WebsiteController::class, 'consultingServices'])->name('website.consultingServices');
    // Mantenimiento y soporte
    Route::get('/mantenimiento-y-soporte', [WebsiteController::class, 'maintenanceAndSupport'])->name('website.maintenanceAndSupport');
    // Blog
    Route::get('/blog', [WebsiteController::class, 'blog'])->name('website.blog');
    // Artículo
    Route::get('/blog/{post:slug}', [WebsiteController::class, 'article'])->name('website.article');
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
