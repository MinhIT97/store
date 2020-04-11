<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name'      => 'required',
            'code'      => 'required',
            'quantity'  => 'required',
            'price'     => 'required',
            'type'      => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,bmp,png',
        ];
    }
    public function messages()
    {
        return [
            // 'name.required'     => 'Vui lòng nhập tên sản phẩm',
            // 'code.required'     => 'Vui lòng nhập mã sản phẩm',
            // 'quantity.required' => 'Vui lòng nhập số lượng số lượng',
            // 'price.required'    => 'Vui lòng nhập giá sản phẩm',
            // 'type.required'     => 'Vui lòng chọn type sản sản phẩm',
            // 'thumbnail.image'   => 'File không phải là image',
            // 'thumbnail.mimes'   => 'Định dạng file không chính xác',

            // 'thumbnail.size'    => 'Kích thước file quá lớn',

        ];
    }
}
