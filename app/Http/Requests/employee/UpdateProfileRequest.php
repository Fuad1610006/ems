<?php

namespace App\Http\Requests\employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_en'=>'required',
            'EmailAddress'=>'nullable|unique:users,email,',
            'contact_no_en'=>'required|unique:users,contact_no_en,'
        ];
    }
}
