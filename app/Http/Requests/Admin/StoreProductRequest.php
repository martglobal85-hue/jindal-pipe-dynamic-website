<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category_id' => ['required', 'integer', 'exists:product_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'text' => ['nullable', 'string', 'max:65535'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
            'pdf' => ['nullable', 'file', 'mimes:pdf', 'max:2048'], // 10 MB
            'status' => ['required', 'boolean'],
        ];
    }
}
