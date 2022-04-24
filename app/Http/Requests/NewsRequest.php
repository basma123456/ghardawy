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

    public function messages()
    {
        return [
            'main_p_ar.required' => trans('validation.required') ,
            'main_p_ar.string' => trans('validation.string') ,
            'main_p_ar.max:75' => trans('validation.max') ,
            'main_p_ar.min:4' => trans('validation.min') ,

            'main_p_en.required' => trans('validation.required') ,
            'main_p_en.string' => trans('validation.string') ,
            'main_p_en.max:75' => trans('validation.max') ,
            'main_p_en.min:4' => trans('validation.min') ,

            'main_p_ru.required' => trans('validation.required') ,
            'main_p_ru.string' => trans('validation.string') ,
            'main_p_ru.max:75' => trans('validation.max') ,
            'main_p_ru.min:4' => trans('validation.min') ,


            'label_ar.required' => trans('validation.required') ,
            'label_ar.string' => trans('validation.string') ,
            'label_ar.max:60' => trans('validation.max') ,
            'label_ar.min:4' => trans('validation.min') ,

            'label_en.required' => trans('validation.required') ,
            'label_en.string' => trans('validation.string') ,
            'label_en.max:60' => trans('validation.max') ,
            'label_en.min:4' => trans('validation.min') ,

            'label_ru.required' => trans('validation.required') ,
            'label_ru.string' => trans('validation.string') ,
            'label_ru.max:60' => trans('validation.max') ,
            'label_ru.min:4' => trans('validation.min') ,

            'image.required_without:id' => trans('validation.required_without') ,
            'image.image' => trans('validation.image') ,
            'image.mimes:jpeg,png,jpg,gif,svg' => trans('validation.mimes') ,

            'news_cat_id.exists:news_cats,id' => trans('validation.exists') ,

        ];
    }
}
