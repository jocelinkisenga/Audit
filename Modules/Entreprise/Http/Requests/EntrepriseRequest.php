<?php

namespace Modules\Entreprise\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntrepriseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "string|required",
            "email" => "string|nullable|email",
            "phone" => "string|required",
            "matricule" => "string|nullable",
            "addresse" => "string|required",
            "town" => "string|nullable",
            "province" => "string|nullable",
            "zip" => "string|nullable",
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
