<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdditionRequest extends FormRequest
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
            'title_ar' => 'required|string|min:3|max:70',
            'title_en' => 'required|string|min:3|max:70',
            'title_ru' => 'required|string|min:3|max:70',

            'desc_ar' => 'required|string|max:185|min:3',
            'desc_en' => 'required|string|max:185|min:3',
            'desc_ru' => 'required|string|max:185|min:3',

            'type'    =>  ['required',Rule::in(['ads', 'best' , 'special'])],
            'status' => 'required|integer|min:0|max:1',
            'admin_id' =>'nullable|integer|min:1|exists:admins,id',
            'super_admin_id' =>'nullable|integer|min:1|exists:super_admins,id',

        ];
    }

    public function messages()
    {
       return [
           'place_id.required' => trans('validation.required') ,
           'title_ar.required' => trans('validation.required') ,
           'title_ar.string' => trans('validation.string') ,
           'title_ar.max:70' => trans('validation.max') ,
           'title_ar.min:3' => trans('validation.min') ,

           'title_en.required' => trans('validation.required') ,
           'title_en.max:70' => trans('validation.max') ,
           'title_en.min:3' => trans('validation.min') ,

           'title_ru.required' => trans('validation.required') ,
           'title_ru.max:70' => trans('validation.max') ,
           'title_ru.min:3' => trans('validation.min') ,


           'desc_ar.required' => trans('validation.required') ,
           'desc_ar.max:70' => trans('validation.max') ,
           'desc_ar.min:3' => trans('validation.min') ,

           'desc_en.required' => trans('validation.required') ,
           'desc_en.max:70' => trans('validation.max') ,
           'desc_en.min:3' => trans('validation.min') ,

           'desc_ru.required' => trans('validation.required') ,
           'desc_ru.max:70' => trans('validation.max') ,
           'desc_ru.min:3' => trans('validation.min') ,

           'type.required' => trans('validation.required') ,
           'status.required' => trans('validation.required') ,
           'status.integer' => trans('validation.integer') ,
           'status.max:1' => trans('validation.max') ,
           'status.min:1' => trans('validation.max') ,


       ];
    }
}
