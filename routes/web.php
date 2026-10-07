<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
Route::get('contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('about', [WebsiteController::class, 'about'])->name('website.about');

Route::get('product/{product:slug}',[WebsiteController::class, 'product'])->name('website.product');
// Admin panel (/admin/*)
require __DIR__ . '/admin.php';
