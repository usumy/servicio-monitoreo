<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePrioridadRequest extends FormRequest
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

            'descripcion' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'descripcion.required'=> 'Se requiere un nombre de la Prioridad'
        ];
    }
    public function upload(Request $request)
    {
        $fileContent = $request->file('archivo')->get();

        // Guardar $fileContent en la base de datos
        // Aquí debes escribir el código para guardar el contenido en tu tabla 'projects'
    }
}
