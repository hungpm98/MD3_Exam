<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealerRequest extends FormRequest
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
            'name' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'managerName' => 'required',
            'address' =>'required',

        ];
    }
    public function message(){
        return [
            'name.required'=>'Không được để trống tên đại lý',
            'code.required'=>'Không được để trống mã đại lý',
            'phone.required'=>'Không được để trống số điện thoại',
            'email.required'=>'Không được để trống email',
            'managerName.required'=>'Không được để trống tên quản lý',
            'address.required'=>'Không được để trống địa chỉ'

        ];
    }
}
