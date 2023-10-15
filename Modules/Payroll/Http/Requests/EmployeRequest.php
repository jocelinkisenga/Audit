<?php

namespace Modules\Payroll\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            "nom" => "required|string",
            "postnom" => "required|string",
            "prenom" => "required|string",
            "matricule" => "string",
            "date_naissance" => "required|string",
            "addresse" => "required|string",
            "contact_phone" => "required|string",
            "etat_civile" => "required|string",
            'role_id' => "integer",
            "niveau_etude" => "string",
            "nombre_enfant" => "string",
            "nom_complet_femme" => "string",
            "contact_personne_fullname" => "string",
            "contact_person_number" => "string",
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
