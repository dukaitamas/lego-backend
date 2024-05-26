<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSetRequest extends FormRequest
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
            'number' => 'required|integer|max:255',
            'themeId' => 'required|integer|digits:3',
            'subtheme' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
            'setName' => 'required|string|max:255',
            'minifigs' => 'required|integer|digits:3',
            'pieces' => 'required|integer|digits:3',
        ];
    }
}
