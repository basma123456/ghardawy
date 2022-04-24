<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsCatsRequest extends FormRequest
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
            'title_ar' => 'required|string|max:80|min:5',
            'title_en' => 'required|string|max:80|min:5',
            'title_ru' => 'required|string|max:80|min:5',
            'status' => 'required|integer|max:1|min:0'
        ];
    }

    public function messages()
    {
        return [

            'title_ar.required' => trans('validation.required') ,
            'title_ar.string' => trans('validation.string') ,
            'title_ar.max:80' => trans('validation.max') ,
            'title_ar.min:5' => trans('validation.min') ,

            'status.required' => trans('validation.required') ,
            'status.string' => trans('validation.string') ,
            'status.max:1' => trans('validation.max') ,
            'status.min:0' => trans('validation.min') ,


        ];
    }
}
