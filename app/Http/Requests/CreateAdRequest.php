<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(auth()->user()->can('manage-ads')){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'size'          => 'required',
            'duration'      => 'required',
            'purchaser'     => 'required',
            'provider_url'   => 'required',
            'campaign_start' => 'required|date',
            'campaign_end'   => 'required|date'
        ];
    }
}
