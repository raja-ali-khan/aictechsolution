<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
        $rules = [
            'first_name'    => 'required|regex:/\A[A-Za-z\s\-]+\z/|max:100',
            'last_name'    => 'required|regex:/\A[A-Za-z\s\-]+\z/|max:100',
            'email'   => 'required|email',
            'phone_number' => 'required|numeric',
            'project_description' => 'required|regex:/^[\.a-zA-Z0-9,!? ]*$/',
        ];
        return $rules;
    }
    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'email.required' => 'Email address is required.',
            'phone_number.required' => 'Phone number is required.',
            'project_description.required' => 'Project description is required.',

        ];
    }
}
