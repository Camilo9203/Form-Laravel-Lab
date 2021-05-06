<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Models\Ficha;
use App\Models\Usuarios;
use Illuminate\Foundation\Http\FormRequest;


class SaveUserRequest extends FormRequest
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


            'numeroDocumento' =>  ['required', 'min:4', 'max:12', Rule::unique((new Ficha)->getTable())->ignore($this->route()->ficha->id ?? null)],
            'emailCurso' => [Rule::unique((new Usuarios)->getTable())->ignore($this->route()->usuarios->id ?? null)],
            // 'tipoDocumento' => ['required'],
            // 'numeroDocumento' => ['required', 'min:4', 'max:12'],
            // 'fechaNacimiento' => ['required', 'min:4', 'max:12'],
            // 'nacionalidad' => ['required', 'min:4', 'max:12'],
            // 'genero' => ['required'],
            // 'direccion' => ['required', 'min:4'],
            // 'localidad' => ['required', 'min:4'],
            // 'departamento' => ['required', 'min:4'],
            // 'municipio' => ['required'],
            // 'telefono' => ['required', 'min:7'],
            // 'grupoEtnico' => ['required'],
            // 'discapacidadFisica' => ['required'],
        ];
    }

    public function messages()
    {
        return [

            'numeroDocumento.unique' => 'Cedula de usuario ya registrada',
            'emailCurso.unique' => 'Correo de usuario ya registrado',
        ];
    }
}
