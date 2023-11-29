<?php

namespace App\Http\Requests\employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
    public function rules(Request $e): array
    {   
         $id=encryptor('decrypt',$e->uptoken);
        return [
            'name_en'=>'required',
            'EmailAddress'=>'nullable|unique:employees,email,'.$id,
            'contact_no_en'=>'required|unique:employees,contact_no_en,'.$id,
        ];
    }
}
