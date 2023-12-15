<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveFallaRequest extends FormRequest
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
            'description' => 'required', 
            'prioridad_id' => 'required|in:1,2,3',
          
            
        ];
        return $this->belongsTo(User::class);
    }
  
    public function messages()
    {
        return[
            'description.required'=> 'Se necesita la descripción de la falla',
            'prioridad.required'=> 'Se requiere una prioridad para la falla',
        ];
    }
    public function upload(Request $request)
    {
        $fileContent = $request->file('archivo')->get();

        // Guardar $fileContent en la base de datos
        // Aquí debes escribir el código para guardar el contenido en tu tabla ''
    }

    
}
