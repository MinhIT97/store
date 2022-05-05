<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
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
            'email'    => 'required',
            'name'     => 'required',
            'address'  => 'required',
            'phone'    => ['required', 'numeric', 'regex:/(0)[0-9]{9}/'],
            'province_id' => ['required'],
            'district_id' => 'required',
            // 'commune'  => 'required',
        ];
    }
}
