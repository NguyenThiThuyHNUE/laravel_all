<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachhangRequest extends FormRequest
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
            'email'=>'required',
            'hoten'=>'required',
            'sdt'=>'required',
            'ngaysinh'=>'required',
            'gioitinh'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Email không được để trống',
            'hoten.required'=>'Họ tên không được để trống',
            'sdt.required'=>'Số điện thoại không được để trống',
            'ngaysinh.required'=>'Ngày sinh không được để trống',
            'gioitinh.required'=>'Giới tính không được để trống'
        ];
    }
}
