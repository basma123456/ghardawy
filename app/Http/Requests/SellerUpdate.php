<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerUpdate extends FormRequest
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
            'Email' => 'sometimes|nullable|email',
            'Password' => 'sometimes|nullable|string|min:8',
            'Name_ar' => 'required|string|max:100',
            'Name_en' => 'required|string|max:100',
            'joining_date' => 'nullable|date',
            'status' => 'required|in:0,1',
            'Address_ar' => 'required|string|max:220',
            'Address_en' => 'required|string|max:220',

        ];
    }
}
