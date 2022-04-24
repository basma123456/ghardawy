<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
            'government_ar' => 'required|string|max:80|min:3',
            'government_en' => 'required|string|max:80|min:3',
            'government_ru' => 'required|string|max:80|min:3',

            'city_ar' => 'required|string|max:80|min:3',
            'city_en' => 'required|string|max:80|min:3',
            'city_ru' => 'required|string|max:80|min:3',

            'district_ru' => 'required|string|max:80|min:3',
            'district_en' => 'required|string|max:80|min:3',
            'district_ar' => 'required|string|max:80|min:3',

            'desc_ar' => 'required|string|max:260|min:3',
            'desc_ru' => 'required|string|max:260|min:3',
            'desc_en' => 'required|string|max:260|min:3',
        ];
    }

    public function messages()
    {
        return [
            'government_ar.required' => trans('validation.required') ,
            'government_ar.string' => trans('validation.string') ,
            'government_ar.max:80' => trans('validation.max') ,
            'government_ar.min:3' => trans('validation.min') ,

            'government_en.required' => trans('validation.required') ,
            'government_en.string' => trans('validation.string') ,
            'government_en.max:80' => trans('validation.max') ,
            'government_en.min:3' => trans('validation.min') ,

            'government_ru.required' => trans('validation.required') ,
            'government_ru.string' => trans('validation.string') ,
            'government_ru.max:80' => trans('validation.max') ,
            'government_ru.min:3' => trans('validation.min') ,


            'city_ar.required' => trans('validation.required') ,
            'city_ar.string' => trans('validation.string') ,
            'city_ar.max:80' => trans('validation.max') ,
            'city_ar.min:3' => trans('validation.min') ,

            'city_en.required' => trans('validation.required') ,
            'city_en.string' => trans('validation.string') ,
            'city_en.max:80' => trans('validation.max') ,
            'city_en.min:3' => trans('validation.min') ,

            'city_ru.required' => trans('validation.required') ,
            'city_ru.string' => trans('validation.string') ,
            'city_ru.max:80' => trans('validation.max') ,
            'city_ru.min:3' => trans('validation.min') ,


            'district_ru.required' => trans('validation.required') ,
            'district_ru.string' => trans('validation.string') ,
            'district_ru.max:80' => trans('validation.max') ,
            'district_ru.min:3' => trans('validation.min') ,

            'district_en.required' => trans('validation.required') ,
            'district_en.string' => trans('validation.string') ,
            'district_en.max:80' => trans('validation.max') ,
            'district_en.min:3' => trans('validation.min') ,

            'district_ar.required' => trans('validation.required') ,
            'district_ar.string' => trans('validation.string') ,
            'district_ar.max:80' => trans('validation.max') ,
            'district_ar.min:3' => trans('validation.min') ,


            'desc_ar.required' => trans('validation.required') ,
            'desc_ar.string' => trans('validation.string') ,
            'desc_ar.max:260' => trans('validation.max') ,
            'desc_ar.min:3' => trans('validation.min') ,

            'desc_en.required' => trans('validation.required') ,
            'desc_en.string' => trans('validation.string') ,
            'desc_en.max:260' => trans('validation.max') ,
            'desc_en.min:3' => trans('validation.min') ,

            'desc_ru.required' => trans('validation.required') ,
            'desc_ru.string' => trans('validation.string') ,
            'desc_ru.max:260' => trans('validation.max') ,
            'desc_ru.min:3' => trans('validation.min') ,

        ];
    }
}
