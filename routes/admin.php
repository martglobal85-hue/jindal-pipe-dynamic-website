<?php

use App\Http\Controllers\Admin\ApproachController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeAboutController;
use App\Http\Controllers\Admin\PageAboutController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductContentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTableContentController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WhyUsController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\QualityController;
use App\Http\Controllers\Admin\ProductQualityController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin routes  (/admin/*)
|--------------------------------------------------------------------------
| Models use slug based route model binding (HasSlug::getRouteKeyName), so
| no database ID ever appears in a URL.
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // Guests only (authenticated admins are redirected to the dashboard)
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.submit');
    });

    // Authenticated admins only
    Route::middleware('auth:admin')->group(function () {

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', fn () => redirect()->route('admin.dashboard'));
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Website
        Route::resource('banners', BannerController::class)->except('show')
            ->parameters(['banners' => 'banner']);
        Route::resource('home-about', HomeAboutController::class)->except('show')
            ->parameters(['home-about' => 'home_about']);
        Route::resource('page-about', PageAboutController::class)->except('show')
            ->parameters(['page-about' => 'page_about']);
        Route::resource('why-us', WhyUsController::class)->except('show')
            ->parameters(['why-us' => 'why_us']);
        Route::resource('approach', ApproachController::class)->except('show')
            ->parameters(['approach' => 'approach']);

        Route::get('contact', [ContactController::class, 'edit'])->name('contact.edit');
        Route::put('contact', [ContactController::class, 'update'])->name('contact.update');

        // Products
        Route::resource('product-categories', ProductCategoryController::class)->except('show')
            ->parameters(['product-categories' => 'product_category']);
        Route::resource('products', ProductController::class)->except('show')
            ->parameters(['products' => 'product']);

        // Nested under a product: /admin/products/{product:slug}/contents ...
        Route::resource('products.contents', ProductContentController::class)->except('show')
            ->parameters(['products' => 'product', 'contents' => 'content'])
            ->scoped();
        Route::resource('products.table-content', ProductTableContentController::class)->except('show')
            ->parameters(['products' => 'product', 'table-content' => 'table_content'])
            ->scoped();

        // General gallery (product_id NULL) + product gallery
        Route::resource('gallery', GalleryController::class)->except('show')
            ->parameters(['gallery' => 'gallery']);

        // Marketing
        Route::resource('testimonials', TestimonialController::class)->except('show')
            ->parameters(['testimonials' => 'testimonial']);
        Route::resource('clients', ClientController::class)->except('show')
            ->parameters(['clients' => 'client']);
        Route::resource('blogs', BlogController::class)->except('show')
            ->parameters(['blogs' => 'blog']);

        //application and quality
        Route::resource('product-qualities', ProductQualityController::class)->except('show')
        ->parameters(['product-qualities' => 'product_quality']);
        Route::resource('applications', ApplicationController::class)->except('show')
            ->parameters(['applications' => 'application']);

    });
});
