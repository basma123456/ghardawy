<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'place_id' => 'required|integer|min:1|exists:places,id',
            'region_id' => 'required|integer|min:1',
//            'place_region' => 'required|unique:place_regions|max:255',
            'address_ar' => 'required|string|min:3|max:180',
            'address_en' => 'required|string|min:3|max:180',
            'address_ru' => 'required|string|min:3|max:180',

            'desc_ar' => 'required|string|min:3|max:180',
            'desc_en' => 'required|string|min:3|max:180',
            'desc_ru' => 'required|string|min:3|max:180',

            'phone' => 'required|string|min:10|max:55',


        ];
    }

    public function messages()
    {
        return [
            'place_id.required' => trans('validation.required') ,
            'place_id.integer' => trans('validation.integer') ,
            'place_id.min:1' => trans('validation.min') ,

            'region_id.required' => trans('validation.required') ,
            'region_id.integer' => trans('validation.integer') ,
            'region_id.min:1' => trans('validation.min') ,

            'address_ar.required' => trans('validation.required') ,
            'address_ar.string' => trans('validation.string') ,
            'address_ar.max:180' => trans('validation.max') ,
            'address_ar.min:3' => trans('validation.min') ,

            'address_en.required' => trans('validation.required') ,
            'address_en.string' => trans('validation.string') ,
            'address_en.max:180' => trans('validation.max') ,
            'address_en.min:3' => trans('validation.min') ,

            'address_ru.required' => trans('validation.required') ,
            'address_ru.string' => trans('validation.string') ,
            'address_ru.max:180' => trans('validation.max') ,
            'address_ru.min:3' => trans('validation.min') ,


            'desc_ar.required' => trans('validation.required') ,
            'desc_ar.string' => trans('validation.string') ,
            'desc_ar.max:180' => trans('validation.max') ,
            'desc_ar.min:3' => trans('validation.min') ,

            'desc_en.required' => trans('validation.required') ,
            'desc_en.string' => trans('validation.string') ,
            'desc_en.max:180' => trans('validation.max') ,
            'desc_en.min:3' => trans('validation.min') ,

            'desc_ru.required' => trans('validation.required') ,
            'desc_ru.string' => trans('validation.string') ,
            'desc_ru.max:180' => trans('validation.max') ,
            'desc_ru.min:3' => trans('validation.min') ,


            'phone.required' => trans('validation.required') ,
            'phone.string' => trans('validation.string') ,
            'phone.max:55' => trans('validation.max') ,
            'phone.min:10' => trans('validation.min') ,
        ];
    }
}
