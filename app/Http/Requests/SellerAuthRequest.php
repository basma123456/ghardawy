<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerAuthRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255' , 'min:3'],
            'email' => ['required',  'email', 'max:255', 'unique:sellers,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed' , 'max:50'],

        ];


    }


    public function messages()
    {
        return [
            'name.required' => trans('validation.required') ,
            'name.string' => trans('validation.string') ,
            'name.max:245' => trans('validation.max') ,
            'name.min:3' => trans('validation.min') ,


            'email.required' => trans('validation.required') ,
            'email.email' => trans('validation.email') ,
            'email.max:245' => trans('validation.max') ,
            'email.unique:sellers,email' => trans('validation.unique') ,


            'password.required' => trans('validation.required') ,
            'password.string' => trans('validation.string') ,
            'password.max:50' => trans('validation.max') ,
            'password.unique:sellers,email' => trans('validation.unique') ,
            'password.min:8' => trans('validation.min') ,

        ];
    }
}
