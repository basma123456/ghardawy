<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
            'Email' => 'required|email|unique:sellers,email',
            'Password' => 'required|string|min:8',
            'Name_ar' => 'required|string|max:100|min:3',
            'Name_en' => 'required|string|max:100|min:3',
            'Name_ru' => 'required|string|max:100|min:3',

            'joining_date' => 'required|date',
            'status' => 'required|in:0,1',
            'Address_ar' => 'required|string|max:220|min:10',
            'Address_en' => 'required|string|max:220|min:10',
            'Address_ru' => 'required|string|max:220|min:10',

        ];
    }

    public function messages()
    {
        return [
            'Email.required' => trans('validation.required'),
            'Email.email' => trans('validation.email'),
            'Email.unique:sellers,email' => trans('validation.unique'),

            'Password.required' => trans('validation.required'),
            'Password.string' => trans('validation.string'),
            'Password.min:8' => trans('validation.min'),


            'Name_ar.required' => trans('validation.required'),
            'Name_ar.string' => trans('validation.string'),
            'Name_ar.max:100' => trans('validation.max'),
            'Name_ar.min:3' => trans('validation.min'),

            'Name_en.required' => trans('validation.required'),
            'Name_en.string' => trans('validation.string'),
            'Name_en.max:100' => trans('validation.max'),
            'Name_en.min:3' => trans('validation.min'),

            'Name_ru.required' => trans('validation.required'),
            'Name_ru.string' => trans('validation.string'),
            'Name_ru.max:100' => trans('validation.max'),
            'Name_ru.min:3' => trans('validation.min'),

            'Address_ar.required' => trans('validation.required'),
            'Address_ar.string' => trans('validation.string'),
            'Address_ar.max:220' => trans('validation.max'),
            'Address_ar.min:10' => trans('validation.min'),

            'Address_en.required' => trans('validation.required'),
            'Address_en.string' => trans('validation.string'),
            'Address_en.max:220' => trans('validation.max'),
            'Address_en.min:10' => trans('validation.min'),

            'Address_ru.required' => trans('validation.required'),
            'Address_ru.string' => trans('validation.string'),
            'Address_ru.max:220' => trans('validation.max'),
            'Address_ru.min:10' => trans('validation.min'),


            'joining_date.required' => trans('validation.required'),
            'joining_date.date' => trans('validation.date'),
            'status.in:0,1' => trans('validation.in'),

        ];
    }
}
