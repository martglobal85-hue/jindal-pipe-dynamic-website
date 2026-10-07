@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null,
    'required' => false,
    'options' => [],
    'rows' => 4,
    'hint' => null,
    'placeholder' => 'Select an option',
    'htmlRequired' => true,
])

@php
    $id = 'field-' . $name;
    $current = $type === 'image' ? null : old($name, $value);
    $invalid = $errors->has($name) ? ' is-invalid' : '';
    $reqAttr = $required && $htmlRequired && $type !== 'richtext' && !($type === 'image' && $value);
@endphp

<div class="mb-3">
    <label for="{{ $id }}" class="form-label fw-semibold">
        {{ $label }}
        @if($required)<span class="text-danger" aria-hidden="true">*</span><span class="visually-hidden">(required)</span>@endif
    </label>

    @if($type === 'textarea' || $type === 'richtext')
        <textarea name="{{ $name }}" id="{{ $id }}" rows="{{ $rows }}"
                  class="form-control{{ $invalid }} {{ $type === 'richtext' ? 'js-richtext' : '' }}"
                  @if($reqAttr) required @endif>{{ $current }}</textarea>

    @elseif($type === 'select')
        <select name="{{ $name }}" id="{{ $id }}" class="form-select{{ $invalid }}" @if($reqAttr) required @endif>
            @if($placeholder !== false)
                <option value="">{{ $placeholder }}</option>
            @endif
            @foreach($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" @selected((string) $current === (string) $optionValue)>{{ $optionLabel }}</option>
            @endforeach
        </select>

    @elseif($type === 'image')
        <input type="file" name="{{ $name }}" id="{{ $id }}" accept="image/jpeg,image/png,image/webp,image/gif"
               class="form-control{{ $invalid }}" @if($reqAttr) required @endif data-image-input>
        @if($value)
            <div class="current-image mt-2 d-flex align-items-center gap-3">
                <img src="{{ asset($value) }}" alt="Current {{ $label }}" class="img-thumbnail" style="max-height: 110px;">
                <span class="small text-muted">Current image. Choose a new file only if you want to replace it.</span>
            </div>
        @endif
        <div class="mt-2 d-none" data-image-preview>
            <img src="" alt="New image preview" class="img-thumbnail" style="max-height: 110px;">
        </div>
    
    @elseif($type === 'pdf')
    <input type="file" name="{{ $name }}" id="{{ $id }}" accept="application/pdf"
           class="form-control{{ $invalid }}">
    @if($value)
        <div class="mt-2 small">
            <i class="bi bi-file-earmark-pdf text-danger"></i>
            <a href="{{ asset($value) }}" target="_blank" rel="noopener">View current PDF</a>
            <span class="text-muted">· choose a new file only to replace it.</span>
        </div>
    @endif
    
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $current }}"
               class="form-control{{ $invalid }}" @if($reqAttr) required @endif>
    @endif

    @if($hint)
        <div class="form-text">{{ $hint }}</div>
    @endif

    @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>
