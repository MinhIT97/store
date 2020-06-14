<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'name'             => 'required',
            'quantity'         => 'required',
            'current_quantity' => 'required',
            'price'            => 'required',
            'status'           => 'required',
            'categories'       => 'required',
            'code'             => 'required',
            'type'             => 'required',
            'brand_id'         => 'required',
            'thumbnail'        => ['image'],
            'sizes'            => 'required',
            'content'          => 'required',
        ];
    }
}
