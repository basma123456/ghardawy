<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerPlaceRequest extends FormRequest
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
            'title_ar' => 'required|string|max:80',
            'title_en' => 'required|string|max:80',
            'title_ru' => 'required|string|max:80',
            'address_ar' => 'required|string|max:180',
            'address_en' => 'required|string|max:180',
            'address_ru' => 'required|string|max:180',
            'desc_ar' => 'required|string|max:180',
            'desc_en' => 'required|string|max:180',
            'desc_ru' => 'required|string|max:180',
            'category' => 'required|int',
            'email' => 'sometimes|nullable|email',
            'phone' => 'required|string',
            'image' => 'required|array|min:7|max:7',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

            'menu' => 'required|array|min:1|max:4',
            'menu.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',


        ];
    }

    public function messages()
    {
                    return [
                        'title_ar.required' => trans('validation.required') ,
                        'title_ar.string' => trans('validation.string') ,
                        'title_ar.max:80' => trans('validation.max') ,
                        'title_ar.min:3' => trans('validation.min') ,

                        'title_en.required' => trans('validation.required') ,
                        'title_en.string' => trans('validation.string') ,
                        'title_en.max:80' => trans('validation.max') ,
                        'title_en.min:3' => trans('validation.min') ,

                        'title_ru.required' => trans('validation.required') ,
                        'title_ru.string' => trans('validation.string') ,
                        'title_ru.max:80' => trans('validation.max') ,
                        'title_ru.min:3' => trans('validation.min') ,



                        'address_ar.required' => trans('validation.required') ,
                        'address_ar.string' => trans('validation.string') ,
                        'address_ar.max:180' => trans('validation.max') ,
                        'address_ar.min:10' => trans('validation.min') ,

                        'address_en.required' => trans('validation.required') ,
                        'address_en.string' => trans('validation.string') ,
                        'address_en.max:180' => trans('validation.max') ,
                        'address_en.min:10' => trans('validation.min') ,


                        'address_ru.required' => trans('validation.required') ,
                        'address_ru.string' => trans('validation.string') ,
                        'address_ru.max:180' => trans('validation.max') ,
                        'address_ru.min:10' => trans('validation.min') ,




                        'desc_ar.required' => trans('validation.required') ,
                        'desc_ar.string' => trans('validation.string') ,
                        'desc_ar.max:180' => trans('validation.max') ,
                        'desc_ar.min:10' => trans('validation.min') ,

                        'desc_en.required' => trans('validation.required') ,
                        'desc_en.string' => trans('validation.string') ,
                        'desc_en.max:180' => trans('validation.max') ,
                        'desc_en.min:10' => trans('validation.min') ,


                        'desc_ru.required' => trans('validation.required') ,
                        'desc_ru.string' => trans('validation.string') ,
                        'desc_ru.max:180' => trans('validation.max') ,
                        'desc_ru.min:10' => trans('validation.min') ,

                        'category.required' => trans('validation.required') ,
                        'category.integer' => trans('validation.integer') ,

                        'email.email' => trans('validation.email') ,
                        'phone.required' => trans('validation.required') ,
                        'phone.string' => trans('validation.string') ,
                        'phone.max:50' => trans('validation.max') ,


                        'likes.integer' => trans('validation.integer') ,
                        'likes.min:0' => trans('validation.min') ,
                        'likes.max:1' => trans('validation.max') ,

                        'image.*.required' => trans('validation.required') ,
                        'image.*.image' => trans('validation.image') ,
                        'image.*.mimes:jpeg,png,jpg,gif,svg' => trans('validation.mimes') ,

                        'image.array' => trans('validation.array') ,
                        'image.min:7' => trans('validation.min') ,
                        'image.max:7' => trans('validation.max') ,



                        'menu.*.required' => trans('validation.required') ,
                        'menu.*.image' => trans('validation.image') ,
                        'menu.*.mimes:jpeg,png,jpg,gif,svg' => trans('validation.mimes') ,
                        'menu.array' => trans('validation.array') ,
                        'menu.min:1' => trans('validation.min') ,
                        'menu.max:4' => trans('validation.max') ,

                    ];

    }
}
