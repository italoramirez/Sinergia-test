<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'primer_nombre' => 'required|string|max:255',
            'documento' => 'required|string|max:255',
            'segundo_nombre' => 'nullable|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'genero_id' => 'required|exists:generos,id',
            'departamento_id' => 'required|exists:departamentos,id',
            'municipio_id' => 'required|exists:municipios,id',
            'tipo_documento_id' => 'required|exists:tipo_documentos,id',
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'primer_nombre.required' => 'El primer nombre es obligatorio.',
            'documento.required' => 'El documento es obligatorio.',
            'primer_nombre.string' => 'El primer nombre debe ser una cadena de texto.',
            'primer_nombre.max' => 'El primer nombre no puede tener más de 255 caracteres.',
            'primer_apellido.required' => 'El primer apellido es obligatorio.',
            'primer_apellido.string' => 'El primer apellido debe ser una cadena de texto.',
            'primer_apellido.max' => 'El primer apellido no puede tener más de 255 caracteres.',
            'genero_id.required' => 'El género es obligatorio.',
            'genero_id.exists' => 'El género seleccionado no existe.',
            'segundo_apellido.required' => 'El segundo apellido debe ser una cadena de texto.',
            'segundo_nombre.required' => 'El segundo nombre debe ser una cadena de texto.',
            'departamento_id.required' => 'El departamento es obligatorio.',
            'departamento_id.exists' => 'El departamento seleccionado no existe.',
            'municipio_id.required' => 'El municipio es obligatorio.',
            'municipio_id.exists' => 'El municipio seleccionado no existe.',
            'tipo_documento_id.required' => 'El tipo de documento es obligatorio.',
        ];
    }
}
