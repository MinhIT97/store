<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name'            => 'required',
            'email'           => ['required', 'email', 'unique:users'],
            'password'        => ['required', 'min:6'],
            'confirmpassword' => ['required', 'same:password'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'            => "Vui lòng nhập tên",
            'email.required'           => 'Vui lòng nhập email',
            'email.unique'             => 'Email khoản đã tồn tại',
            'password.required'        => 'Vui lòng nhập password',
            'password.min'             => 'Password tối thiểu 6 kí tự',
            'confirmpassword.required' => 'Vui lòng nhập lại password',
            'confirmpassword.same'     => 'Password nhập lại không đúng',

        ];
    }
}
