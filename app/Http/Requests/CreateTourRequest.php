<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Entrust::can('create_tour');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|required',
            'short_description' => 'string|nullable',
            'description' => 'string|nullable',
            'place' => 'string|nullable',
            'price' => 'numeric|required|min:0.01',
            'time_duration' => 'numeric|required|min:0',
            'url_cover' => 'url|required',
            'url_gird' => 'url|required',
         ];
    }
}
