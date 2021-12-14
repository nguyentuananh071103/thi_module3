<?php

namespace App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;

class CreateHotelRequest extends FormRequest
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
            "name" => "required",
            "sex" => "required",
            "phone" => "required",
            "cccd" => "required",
            "email" => "required",

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'sex.required' => 'Giới tính không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'cccd.required' => 'CCCD không được để trống',
            'email.required' => 'Email không được để trống',
        ];
    }
}
