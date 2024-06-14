<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|string|min:10',
            'last_name' => 'required|string|min:5',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'first_name.required' => 'must input first name',
            'first_name.min' => 'must be greter than 10',
            'last_name.required' => 'must input first name',
            'last_name.min' => 'must be greter than 5',
            'email.required' => 'must input email',
            'email.email' => 'email not valid',
            'message' => 'must input message'
        ];
    }
}
