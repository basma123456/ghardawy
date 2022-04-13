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
}
