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
            "name"             => 'require',
            "quantity"         => 'require',
            "current_quantity" => 'require',
            "price"            => 'require',
            "sale_price"       => 'require',
            "status"           => 'require',
            "category_id"      => 'require',
            "code"             => 'require',
            "type"             => 'require',
            "brand_id"         => 'require',
        ];
    }
}
