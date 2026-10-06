@php $record = $record ?? null; @endphp

<x-admin.field name="title" label="Client Name" type="text" :value="$record?->title" required />
<x-admin.field name="image" label="Logo / Image" type="image" required :value="$record?->image" hint="JPG, PNG, WEBP or GIF, max 2 MB." />
<x-admin.field name="status" label="Status" type="select" :options="['1' => 'Active', '0' => 'Inactive']" :placeholder="false" :value="(int) ($record?->status ?? true)" required />
