@php $record = $record ?? null; @endphp

@php
    $currentType = old('gallery_type', $record
        ? ($record->product_id ? 'product' : 'general')
        : (!empty($preselectProductId) ? 'product' : 'general'));
    $selectedProduct = old('product_id', $record?->product_id ?? ($preselectProductId ?? null));
@endphp

<x-admin.field name="gallery_type" label="Gallery Type" type="select"
    :options="['general' => 'General Gallery', 'product' => 'Product Gallery']"
    :placeholder="false" :value="$currentType" required
    hint="General gallery images belong to the website. Product gallery images are extra images of one product." />

<div id="productSelectWrap" class="{{ $currentType === 'product' ? '' : 'd-none' }}">
    <x-admin.field name="product_id" label="Product" type="select"
        :options="$products->pluck('title', 'id')->all()"
        :value="$selectedProduct" :html-required="false" required />
</div>

<x-admin.field name="title" label="Title" type="text" :value="$record?->title" required />
<x-admin.field name="image" label="Image" type="image" required :value="$record?->image" hint="JPG, PNG, WEBP or GIF, max 2 MB." />
<x-admin.field name="status" label="Status" type="select" :options="['1' => 'Active', '0' => 'Inactive']" :placeholder="false" :value="(int) ($record?->status ?? true)" required />

@push('scripts')
    <script>
        (function () {
            var type = document.getElementById('field-gallery_type');
            var wrap = document.getElementById('productSelectWrap');
            if (!type || !wrap) { return; }
            type.addEventListener('change', function () {
                wrap.classList.toggle('d-none', type.value !== 'product');
            });
        })();
    </script>
@endpush
