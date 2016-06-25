<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginValidador extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //////esta funcion sirve para habilitar el middleware para validar los campos
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'usuario' => 'required',
            'pass' => 'required',
        ];
    }
}
