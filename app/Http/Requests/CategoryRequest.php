<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'title_ar' => 'required|string|max:110|min:3',
            'title_en' => 'required|string|max:110|min:3',
            'title_ru' => 'required|string|max:110|min:3',

            'about_page_ar' => 'required|string|max:215|min:3',
            'about_page_en' => 'required|string|max:215|min:3',
            'about_page_ru' => 'required|string|max:215|min:3',

            'likes' => 'nullable:string',
            'unlikes' =>'nullable:string',
            'status' => 'required|in:0,1',
//            'image' => 'array|min:7|max:7',
            'image' => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }


    public function messages()
    {
       return [
           'title_ar.required' => trans('validation.required') ,
           'title_ar.string' => trans('validation.string') ,
           'title_ar.max:110' => trans('validation.max') ,
           'title_ar.min:3' => trans('validation.min') ,

           'title_en.required' => trans('validation.required') ,
           'title_en.string' => trans('validation.string') ,
           'title_en.max:110' => trans('validation.max') ,
           'title_en.min:3' => trans('validation.min') ,

           'title_ru.required' => trans('validation.required') ,
           'title_ru.string' => trans('validation.string') ,
           'title_ru.max:110' => trans('validation.max') ,
           'title_ru.min:3' => trans('validation.min') ,


           'about_page_ar.required' => trans('validation.required') ,
           'about_page_ar.string' => trans('validation.string') ,
           'about_page_ar.max:215' => trans('validation.max') ,
           'about_page_ar.min:3' => trans('validation.min') ,

           'about_page_en.required' => trans('validation.required') ,
           'about_page_en.string' => trans('validation.string') ,
           'about_page_en.max:215' => trans('validation.max') ,
           'about_page_en.min:3' => trans('validation.min') ,

           'about_page_ru.required' => trans('validation.required') ,
           'about_page_ru.string' => trans('validation.string') ,
           'about_page_ru.max:215' => trans('validation.max') ,
           'about_page_ru.min:3' => trans('validation.min') ,


           'likes.string' => trans('validation.string') ,
           'unlikes.string' => trans('validation.string') ,

           'status.required' => trans('validation.required') ,
           'status.in:0,1' => trans('validation.in') ,

           'image.required_without:id' => trans('validation.required_without') ,

           'image.image' => trans('validation.image') ,
           'image.mimes:jpeg,png,jpg,gif,svg' => trans('validation.mimes') ,



       ];
    }
}
