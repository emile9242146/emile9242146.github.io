<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
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
            'prenom' => 'required',
            'nom' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'adresse' => 'required',
            'numero_carte' => 'required|unique:clients,numero_carte',
            'jour_entree' => 'required',
            'jour_sortie' => 'required',

        ];
    }
}
