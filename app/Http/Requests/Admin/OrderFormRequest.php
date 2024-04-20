<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest
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
            "customer_id"=>["required"],
            "organization_id"=>["required"],
            "number"=>["required"],
            "data"=>["date"],
            "description"=>["required"],
            "desiredDate"=>["required"],
            "letter"=>["file"],
            
        ];
    }
}
