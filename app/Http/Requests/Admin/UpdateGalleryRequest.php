<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
            'status' => ['required', 'boolean'],
            'gallery_type' => ['required', 'in:general,product'],
            'product_id' => ['required_if:gallery_type,product', 'nullable', 'integer', 'exists:products,id'],
        ];
    }
}
