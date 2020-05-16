<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
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
            'title'       => 'required',
            'email'       => ['required', 'email'],
            'phone'       => ['required', 'numeric', 'regex:/[0-9]{9}/'],
            'address'     => 'required',
            'total_price' => 'required',
            'status'      => 'required',

        ];
    }
}
