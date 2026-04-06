<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// Page d'accueil
Route::get('/', [PageController::class, 'home'])->name('home');

// Pages principales
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/galerie', [PageController::class, 'gallery'])->name('gallery');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/temoignages', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Formulaire de contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
