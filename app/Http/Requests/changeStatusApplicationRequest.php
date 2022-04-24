<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class changeStatusApplicationRequest extends FormRequest
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
            'options' => ['required',Rule::in(['no_action_yet','postponed','accepted','rejected','called'])],
        ];
    }

    public function messages()
    {
        return [
            'options.required' => trans('validation.required'),
        ];
    }
}
