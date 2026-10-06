<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
{{-- Minimal example of consuming the CMS content. Images always use asset($path). --}}
<div class="container py-5">

    @foreach($banners as $banner)
        <section class="row align-items-center g-4 mb-5">
            <div class="col-md-6">
                <h1>{{ $banner->title }}</h1>
                @if($banner->subtitle)<p class="lead">{{ $banner->subtitle }}</p>@endif
                <p>{{ $banner->text }}</p>
            </div>
            @if($banner->image)
                <div class="col-md-6"><img src="{{ asset($banner->image) }}" alt="{{ $banner->title }}" class="img-fluid rounded"></div>
            @endif
        </section>
    @endforeach

    @if($about)
        <section class="mb-5">
            <h2>{{ $about->title }}</h2>
            <p>{{ $about->text }}</p>
        </section>
    @endif

    @foreach($categories as $category)
        <section class="mb-5">
            <h2>{{ $category->title }}</h2>
            <div class="row g-3">
                @foreach($category->products as $product)
                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            @if($product->image)<img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->title }}">@endif
                            <div class="card-body"><h3 class="h6">{{ $product->title }}</h3></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endforeach

    @if($blogs->isNotEmpty())
        <section class="mb-5">
            <h2>Latest from the blog</h2>
            @foreach($blogs as $blog)
                <article class="mb-3"><h3 class="h5">{{ $blog->title }}</h3></article>
            @endforeach
        </section>
    @endif

    @if($contact)
        <footer class="border-top pt-4 text-muted">
            {{ $contact->email }} · {{ $contact->mobile }}<br>{{ $contact->footertext }}
        </footer>
    @endif
</div>
</body>
</html>
