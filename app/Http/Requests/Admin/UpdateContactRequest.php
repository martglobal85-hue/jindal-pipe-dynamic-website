<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email', 'max:255'],
            'mobile' => ['required', 'string', 'max:30'],
            'address' => ['required', 'string', 'max:2000'],
            'map' => ['required', 'string', 'max:5000'],
            'link1' => ['nullable', 'url', 'max:255'],
            'link2' => ['nullable', 'url', 'max:255'],
            'link3' => ['nullable', 'url', 'max:255'],
            'link4' => ['nullable', 'url', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
            'footertext' => ['nullable', 'string', 'max:1000'],
        ];
    }
}
