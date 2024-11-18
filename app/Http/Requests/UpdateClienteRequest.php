<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'direccion' => 'nullable|string|max:50',
            'telefono' => 'nullable|string|max:50',
            'correo' => 'nullable|email|max:50|unique:clientes,correo,' . $this->route('cliente'),
        ];
    }
}
