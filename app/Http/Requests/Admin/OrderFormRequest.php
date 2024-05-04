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
            "letter"=>["image"],
            
        ];
    }
    protected function prepareForValidation() //выполняется до валидации - при создании комментария надо добавить поле user_id
    {
        $this->merge([ //добавить к текущему запросу массив с данными
            /*    "customer_id"=>"1",
                "organization_id"=>"1",
                "number"=>"NTCN#1",
                "data"=>"2024-01-27 ",
                "description"=>"required",
                "desiredDate"=>"required",*/
               
               // "customer_id"=>"1",
              //  "organization_id"=>"1",
                
        ]);
    }
}
