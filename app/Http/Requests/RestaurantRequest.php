<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return[
            'name' => 'required',
            'cadena' => 'required|max:255',
            'client_id' => 'required|exists:client,id'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'cadena.required' => 'El restaurante debe pertenecer a una cadena'
            //...
        ];
    }
}
