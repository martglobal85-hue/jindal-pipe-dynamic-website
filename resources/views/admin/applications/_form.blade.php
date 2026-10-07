@php $record = $record ?? null; @endphp

<x-admin.field name="title" label="Title" type="text" :value="$record?->title" required />
<x-admin.field name="text" label="Text" type="richtext" :value="$record?->text" />
<x-admin.field name="image" label="Image" type="image" :value="$record?->image" hint="JPG, PNG, WEBP or GIF, max 2 MB." />

    @push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        document.querySelectorAll('.js-richtext').forEach(function (el) {
            ClassicEditor.create(el, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|', 'undo', 'redo']
            }).catch(function (error) { console.error(error); });
        });
    </script>
@endpush