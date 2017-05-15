<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheckoutRequest extends FormRequest
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
            'full_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'email|nullable',
            'name_on_card' => 'string|required',
            'card_number' => 'string|required',
            'expiration_date_month' => [
                'required',
                Rule::in(range(1, 12))
            ],
            'expiration_date_year' => 'integer|required|min:0',
            'ccv' => 'digits:3|required',
            'address' => 'string|required',
            'policy_terms' => 'accepted|required',
        ];
    }
}
