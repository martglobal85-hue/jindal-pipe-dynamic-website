@php $record = $record ?? null; @endphp

<x-admin.field name="title" label="Title" type="text" :value="$record?->title" required />
<x-admin.field name="subtitle" label="Subtitle" type="text" :value="$record?->subtitle" />
<x-admin.field name="text" label="Text" type="textarea" :value="$record?->text" />
<x-admin.field name="image" label="Image" type="image" :value="$record?->image" hint="JPG, PNG, WEBP or GIF, max 2 MB." />
