<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaneRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'naz' => 'string|required|min:3',
            'imie' => 'string|required',
            'tel' => 'string|required',
            'adres' => 'string|required',
            'poczta' => 'string|required'
        ];
    }
}
