<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyPlaceRequest extends FormRequest
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
            'title' => 'required|string|max:55|min:3',
            'desc' => 'required|string|max:80|min:10',
            'address' => 'required|string|max:80|min:5',
            'phone' => 'required|string|max:55|min:10',
            'place_progress' => 'required|string|max:105|min:10',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => trans('validation.required') ,
            'title.string' => trans('validation.string') ,
            'title.max:55' => trans('validation.max') ,
            'title.min:3' => trans('validation.min') ,


            'desc.required' => trans('validation.required') ,
            'desc.string' => trans('validation.string') ,
            'desc.max:80' => trans('validation.max') ,
            'desc.min:10' => trans('validation.min') ,


            'address.required' => trans('validation.required') ,
            'address.string' => trans('validation.string') ,
            'address.max:80' => trans('validation.max') ,
            'address.min:5' => trans('validation.min') ,

            'phone.required' => trans('validation.required') ,
            'phone.string' => trans('validation.string') ,
            'phone.max:55' => trans('validation.max') ,
            'phone.min:10' => trans('validation.min') ,

            'place_progress.required' => trans('validation.required') ,
            'place_progress.string' => trans('validation.string') ,
            'place_progress.max:105' => trans('validation.max') ,
            'place_progress.min:10' => trans('validation.min') ,




        ];

    }

}
