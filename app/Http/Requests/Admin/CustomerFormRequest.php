<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth("admin")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title"=>'required|string',
            "address"=>'required|string',
            'email'=>'required|min:4|max:100|email|string|unique:users,email',
            "phone"=>'required|numeric',
            "description"=>'required|string',
            'password'=>'required|min:4|max:100|confirmed'
        ];
    }
}
