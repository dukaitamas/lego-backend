<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateThemeRequest extends FormRequest
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
            "name" => "required|string|max:50",
            "firstReleased" => "required|integer|digits:4",
            "lastReleased" => "required|integer|digits:4",
            'IMAGEURL' => 'nullable|string|max:255|url'

            // or
            // "name" => "string|max:50",
            // "firstReleased" => "required|integer",
            // "lastReleased" => "required|integer",

        ];
    }
}
