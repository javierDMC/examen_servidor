<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return[
            'title' => 'required',
            'year' => 'required|integer|between:1958,2023',
            'character_id' => 'required|exists:character,id'
        ];

    }

    public function messages()
    {
        return [
            'title.required' => 'El titulo es obligatorio',
            'year.required' => 'El año debe ser mayor a 1958 y menor que 2023'
            //...
        ];
    }
}
