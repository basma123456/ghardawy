<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'phone' => 'required|array|min:1|max:4',
            'phone.*' => 'string|min:10|max:60',
        ];


    }

    public function messages()
    {
        return [
            'description_ar.required' => trans('validation.required') ,
            'description_ar.string' => trans('validation.string') ,
            'description_ar.max:80' => trans('validation.max') ,
            'description_ar.min:20' => trans('validation.min') ,

            'description_en.required' => trans('validation.required') ,
            'description_en.string' => trans('validation.string') ,
            'description_en.max:80' => trans('validation.max') ,
            'description_en.min:20' => trans('validation.min') ,

            'description_ru.required' => trans('validation.required') ,
            'description_ru.string' => trans('validation.string') ,
            'description_ru.max:80' => trans('validation.max') ,
            'description_ru.min:20' => trans('validation.min') ,


            'address_ar.required' => trans('validation.required') ,
            'address_ar.string' => trans('validation.string') ,
            'address_ar.max:60' => trans('validation.max') ,
            'address_ar.min:10' => trans('validation.min') ,

            'address_en.required' => trans('validation.required') ,
            'address_en.string' => trans('validation.string') ,
            'address_en.max:60' => trans('validation.max') ,
            'address_en.min:10' => trans('validation.min') ,

            'address_ru.required' => trans('validation.required') ,
            'address_ru.string' => trans('validation.string') ,
            'address_ru.max:60' => trans('validation.max') ,
            'address_ru.min:10' => trans('validation.min') ,

            'phone.array' => trans('validation.array') ,
            'phone.required' => trans('validation.required') ,
            'phone.min:1' => trans('validation.required') ,
            'phone.max:4' => trans('validation.required') ,

            'phone.*.string' => trans('validation.string') ,
            'phone.*.max:60' => trans('validation.max') ,
            'phone.*.min:10' => trans('validation.min') ,

            'email1.required' => trans('validation.required') ,
            'email1.string' => trans('validation.string') ,
            'email1.max:90' => trans('validation.max') ,
            'email1.min:10' => trans('validation.min') ,

            'email2.required' => trans('validation.required') ,
            'email2.string' => trans('validation.string') ,
            'email2.max:90' => trans('validation.max') ,
            'email2.min:10' => trans('validation.min') ,

        ];
    }
}
