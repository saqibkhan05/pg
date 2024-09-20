<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Otprequest extends FormRequest
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
            'otp' => 'required|numeric|digits:6', // Validates OTP
        ];
    }

    public function messages()
    {
        return [
            'otp.required' => 'The OTP field is required.',
            'otp.numeric' => 'The OTP must be a number.',
            'otp.digits' => 'The OTP must be exactly 6 digits.',
        ];
    }
}
