@php $record = $record ?? null; @endphp

<x-admin.field name="title" label="Title (row label)" type="text" :value="$record?->title" required hint="Left column of the product specification table, e.g. "Power Output"." />
<x-admin.field name="text" label="Text (row value)" type="textarea" :value="$record?->text" required hint="Right column of the table, e.g. "50 kVA"." />
<x-admin.field name="status" label="Status" type="select" :options="['1' => 'Active', '0' => 'Inactive']" :placeholder="false" :value="(int) ($record?->status ?? true)" required />
