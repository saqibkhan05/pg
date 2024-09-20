<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmenityCreateRequest extends FormRequest
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
            'name' => 'required|max:200|unique:pg_amenities',
            'cost' => 'required|numeric|gt:-1',
        ];
    }

    public function messages()
    {
        return [
            'cost.gt' => 'The Cost must be a positive number.',
            // Add other custom messages as needed
        ];
    }
}
