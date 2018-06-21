<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChargeRequest extends FormRequest
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
            'card_name' => 'required',
            'card_number' => 'required',
            'expiry' => 'required',
            'cvc' => 'required|max:4',
            'amount' => 'required'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
     
    public function messages()
    {
        return [
            'card_name.required' => 'A card name is required',
            'card_number.required'  => 'A card number is required',
            'expiry.required'  => 'A expiry is required',
            'cvc.required'  => 'A cvc is required',
            'amount.required'  => 'A amount is required',
        ];
    }
}
