<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
            'bg_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title_ar' => 'required|string|max:80',
            'title_en' => 'required|string|max:80',
            'title_ru' => 'required|string|max:80',

            'title2_ar' => 'required|string|max:80',
            'title2_en' => 'required|string|max:80',
            'title2_ru' => 'required|string|max:80',

            'top_desc_ar' => 'required|string|max:80',
            'top_desc_en' => 'required|string|max:80',
            'top_desc_ru' => 'required|string|max:80',

            'left_desc_ar' => 'required|string|max:120',
            'middle_desc_ar' => 'required|string|max:120',
            'right_desc_ar' => 'required|string|max:120',

            'left_desc_en' => 'required|string|max:120',
            'middle_desc_en' => 'required|string|max:120',
            'right_desc_en' => 'required|string|max:120',

            'left_desc_ru' => 'required|string|max:120',
            'middle_desc_ru' => 'required|string|max:120',
            'right_desc_ru' => 'required|string|max:120',

            'website' => 'required|string|max:190',

            'left_upper_cat' => 'required|integer|exists:categories,id',
            'right_upper_cat' => 'required|integer|exists:categories,id',
            'screen_cat' => 'required|integer|exists:categories,id',
            'bottom_big_cat' => 'required|integer|exists:categories,id',

            'bottom_left_upper_cat' => 'required|integer|exists:categories,id',
            'bottom_left_lower_cat' => 'required|integer|exists:categories,id',

        ];
    }
}
