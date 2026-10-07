<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\HomeAbout;
use App\Models\ProductCategory;
use App\Models\Testimonial;
use App\Models\PageAbout;
use App\Models\WhyUs;
use App\Models\Approach;





/**
 * Minimal public page showing how the frontend consumes the CMS content.
 */
class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.home', [
            'banners' => Banner::latest()->get(),
            'about' => HomeAbout::latest()->first(),
            'categories' => ProductCategory::active()->with(['products' => fn ($q) => $q->active()])->get(),
            'testimonials' => Testimonial::active()->latest()->limit(6)->get(),
            'clients' => Client::active()->latest()->get(),
            'blogs' => Blog::active()->latest()->limit(3)->get(),
            'contact' => Contact::first(),
        ]);
    }

    public function contact()
    {
        return view('website.contact', [
            'categories' => ProductCategory::active()->with(['products' => fn ($q) => $q->active()])->get(),
            'contact' => Contact::first(),
        ]);
      
    }

    public function about()
    {
         return view('website.about', [
            'categories' => ProductCategory::active()->with(['products' => fn ($q) => $q->active()])->get(),
            'contact' => Contact::first(),
            'pageabout' => PageAbout::latest()->first(),
            'whyus'=> WhyUs::latest()->first(),
            'approach'=>Approach::latest()->first(),
            'testimonials' => Testimonial::active()->latest()->limit(6)->get(),
            'clients' => Client::active()->latest()->get(),
        ]);
    }
}
