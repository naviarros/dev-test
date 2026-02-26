<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'gender' => 'nullable|string|max:20',
            'ip_address' => 'nullable|ip',
            'company' => 'nullable|string|max:150',
            'city' => 'nullable|string|max:100',
            'title' => 'nullable|string|max:150',
            'website' => 'nullable|url|max:2000',
        ];
    }
}
