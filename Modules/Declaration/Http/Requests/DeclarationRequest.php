<?php

namespace Modules\Declaration\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeclarationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "user_id" => "nullable",
            "name" => "nullable|string",
            "phone" => "string|nullable",
            "addresse" => "nullable|string",
            "town" => "nullable|string",
            "province" => "nullable|string",
            "entrepriseId" => "required|integer",
            "date_declaration" => "required|date"
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }
}
