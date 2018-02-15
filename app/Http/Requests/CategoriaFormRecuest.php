<?php

namespace XPROJECT\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRecuest extends FormRequest
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
            'nombre'=>'requerided|max:50',
            'descripcion'=>'max:256',
        ];
    }
}
