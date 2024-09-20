<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerCreaterequest extends FormRequest
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
            'name' => 'required|max:200',
            'email' => 'required|unique:customers',
            'phone' => 'required|min:10|unique:customers',
            'password' => 'required',
        ];
    }
    // protected function failedValidation(Validator $validator)
    // {
    //     // Customize the JSON response here
    //     $response = response()->json([
    //         'success' => false,
    //         'message' => 'Validation errors occurred.',
    //         'errors' => $validator->errors(), // Validation error messages
    //         'old_data' => $this->all() // Include old input data
    //     ], 422);
    //     throw new HttpResponseException($response);
    // }
}
