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
            'title' => 'required|string|max:55',
            'desc' => 'required|string|max:80',
            'address' => 'required|string|max:80',
            'phone' => 'required|string|max:55',
            'place_progress' => 'required|string|max:105',
        ];
    }
}
