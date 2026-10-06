<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'home'])->name('website.home');

// Admin panel (/admin/*)
require __DIR__ . '/admin.php';
