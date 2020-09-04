<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestResetPassword extends FormRequest
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
        
            'password'  => 'required',
            'passwordAgain'  => 'required|same:password',
        ];
    }

    public function message(){
        return[
                    'password.required'         => 'Trường này không được để trống',
                    'passwordAgain.required'     => 'Trường này không được để trống',
                    'passwordAgain.same'             => 'Mật khẩu xác nhận không đúng',
            ];
    }
}
