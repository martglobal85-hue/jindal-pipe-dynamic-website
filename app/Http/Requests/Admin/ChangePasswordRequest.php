<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // Step 1: old password must match the logged-in admin
            'current_password' => ['required', 'string', 'current_password:admin'],

            // Step 2: new password + step 3: must match confirmation
            'password' => [
                'required',
                'string',
                Password::min(8)->letters()->mixedCase()->numbers(),
                'confirmed',
                'different:current_password',
            ],
            'password_confirmation' => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'current_password.current_password' => 'The old password is incorrect.',
            'password.confirmed' => 'The new password and confirm password do not match.',
            'password.different' => 'The new password must be different from the old password.',
        ];
    }

    public function attributes()
    {
        return [
            'current_password' => 'old password',
            'password' => 'new password',
            'password_confirmation' => 'confirm password',
        ];
    }
}
