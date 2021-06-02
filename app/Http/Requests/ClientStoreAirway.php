<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreAirway extends FormRequest
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
            'nombre' => 'required',
			'primer_apellido' => 'required',
			'segundo_apellido' => 'required',
			'DNI' => 'required',
			'correo' => ['required','regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/' ],
        ];
    }
}