<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'phone' => 'required|integer',
        ];
    }

    /**
     * Custom Error Message
     * 
     */
    public function messages()
    {
        return[
            'name.required' => 'Full Name is Required',
            'email.required' => 'Email is Required',
            'phone.integer' => 'Phone Number Must Be Integer'
        ];
    }

}
