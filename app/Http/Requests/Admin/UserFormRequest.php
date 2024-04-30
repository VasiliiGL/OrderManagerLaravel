<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            "name"=>["required"],
            //"name"=>'required|numeric|min:160000|max:170999|unique:users,name',
            'password'=>'required|min:4|max:100|confirmed',
            'email'=>'required|min:4|max:100|email|string',       //|unique:users,email
            "lastname"=>'required|string|min:4|max:30',
            "fathername"=>'required|string|min:4|max:30',
            "firstname"=>'required|string|min:4|max:30',
            "jobtitle"=>'required|string|min:4|max:30',
            "organization_id"=>'required',
            "workphone"=>'required|numeric',
            "personalphone"=>'required|numeric',                    
        ];
    }
}
