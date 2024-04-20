<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class OrderForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //dd(auth("customer")->check());
        return auth("customer")->check();
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
    protected function prepareForValidation() //выполняется до валидации - при создании комментария надо добавить поле user_id
    {
        $this->merge([ //добавить к текущему запросу массив с данными
                "customer_id"=>auth("customer")->id()
                
        ]);
       // dd($this);
    }



}
