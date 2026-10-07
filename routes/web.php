<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
Route::get('contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('about', [WebsiteController::class, 'about'])->name('website.about');

// Admin panel (/admin/*)
require __DIR__ . '/admin.php';
