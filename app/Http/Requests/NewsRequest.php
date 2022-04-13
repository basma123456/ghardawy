<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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

            'main_p_ar' => 'required|string|max:75|min:4',
            'main_p_en' => 'required|string|max:75|min:4',
            'main_p_ru' => 'required|string|max:75|min:4',

            'first_p_ar' => 'nullable|string|max:75|min:4',
            'first_p_en' => 'nullable|string|max:75|min:4',
            'first_p_ru' => 'nullable|string|max:75|min:4',

            'second_p_ar' => 'nullable|string|max:75|min:4',
            'second_p_en' => 'nullable|string|max:75|min:4',
            'second_p_ru' => 'nullable|string|max:75|min:4',

            'third_p_ar' => 'nullable|string|max:75|min:4',
            'third_p_en' => 'nullable|string|max:75|min:4',
            'third_p_ru' => 'nullable|string|max:75|min:4',

            'label_ar' => 'nullable|string|max:60|min:4',
            'label_en' => 'nullable|string|max:60|min:4',
            'label_ru' => 'nullable|string|max:60|min:4',

            'image' => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg',
            'news_cat_id' => 'required|exists:news_cats,id',

        ];
    }
}
