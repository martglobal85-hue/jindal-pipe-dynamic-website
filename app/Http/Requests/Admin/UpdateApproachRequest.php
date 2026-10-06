<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApproachRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'visiontitle' => ['required', 'string', 'max:255'],
            'visiontext' => ['nullable', 'string', 'max:65535'],
            'visionimage' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
            'missiontitle' => ['required', 'string', 'max:255'],
            'missiontext' => ['nullable', 'string', 'max:65535'],
            'missionimage' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
            'ourcompanytitle' => ['required', 'string', 'max:255'],
            'ourcompanytext' => ['nullable', 'string', 'max:65535'],
            'ourcompanyimage' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
        ];
    }
}
