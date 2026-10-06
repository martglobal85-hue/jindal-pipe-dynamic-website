@php $record = $record ?? null; @endphp

<h6 class="form-section-title">Vision</h6>
<x-admin.field name="visiontitle" label="Vision Title" type="text" :value="$record?->visiontitle" required />
<x-admin.field name="visiontext" label="Vision Text" type="textarea" :value="$record?->visiontext" />
<x-admin.field name="visionimage" label="Vision Image" type="image" :value="$record?->visionimage" hint="JPG, PNG, WEBP or GIF, max 2 MB." />
<h6 class="form-section-title">Mission</h6>
<x-admin.field name="missiontitle" label="Mission Title" type="text" :value="$record?->missiontitle" required />
<x-admin.field name="missiontext" label="Mission Text" type="textarea" :value="$record?->missiontext" />
<x-admin.field name="missionimage" label="Mission Image" type="image" :value="$record?->missionimage" hint="JPG, PNG, WEBP or GIF, max 2 MB." />
<h6 class="form-section-title">Our Company</h6>
<x-admin.field name="ourcompanytitle" label="Our Company Title" type="text" :value="$record?->ourcompanytitle" required />
<x-admin.field name="ourcompanytext" label="Our Company Text" type="textarea" :value="$record?->ourcompanytext" />
<x-admin.field name="ourcompanyimage" label="Our Company Image" type="image" :value="$record?->ourcompanyimage" hint="JPG, PNG, WEBP or GIF, max 2 MB." />
