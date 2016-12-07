<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSpecialSectionRequest extends FormRequest
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
            'url'                  => 'required',
            'slug'                 => 'required|unique:speical_sections',
            'title'                => 'required',
            'site'                 => 'required',
            'registrationRequired' => 'required|boolean',
            'templateLocation'     => 'required'
        ];
    }
}
