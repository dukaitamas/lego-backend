<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSetRequest extends FormRequest
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

            'number' => 'required|string|max:255', // Módosítva string-re
            'themeId' => 'required|integer', // digits:3 eltávolítva
            'subtheme' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
            'setName' => 'required|string|max:255',
            'minifigs' => 'required|integer', // digits:3 eltávolítva
            'pieces' => 'required|integer', // digits:3 eltávolítva

        ];
    }
}
