<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            ['label' => 'Total Products', 'count' => Product::count(), 'icon' => 'bi-box-seam', 'color' => 'blue', 'route' => 'admin.products.index'],
            ['label' => 'Total Categories', 'count' => ProductCategory::count(), 'icon' => 'bi-tags', 'color' => 'purple', 'route' => 'admin.product-categories.index'],
            ['label' => 'Total Blogs', 'count' => Blog::count(), 'icon' => 'bi-journal-text', 'color' => 'orange', 'route' => 'admin.blogs.index'],
            ['label' => 'Total Testimonials', 'count' => Testimonial::count(), 'icon' => 'bi-chat-quote', 'color' => 'green', 'route' => 'admin.testimonials.index'],
            ['label' => 'Total Clients', 'count' => Client::count(), 'icon' => 'bi-people', 'color' => 'red', 'route' => 'admin.clients.index'],
            ['label' => 'Gallery Images', 'count' => Gallery::count(), 'icon' => 'bi-images', 'color' => 'teal', 'route' => 'admin.gallery.index'],
        ];

        $recentProducts = Product::with('category:id,title')->latest()->limit(5)->get();
        $recentBlogs = Blog::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recentProducts', 'recentBlogs'));
    }
}
