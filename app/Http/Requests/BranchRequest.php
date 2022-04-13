<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'place_id' => 'integer|min:1|exists:places,id',
            'region_id' => 'integer|min:1',
            'place_region' => 'required|unique:place_regions|max:255',
            'address_ar' => 'string|min:3|max:180',
            'address_en' => 'string|min:3|max:180',
            'address_ru' => 'string|min:3|max:180',

            'desc_ar' => 'string|min:3|max:180',
            'desc_en' => 'string|min:3|max:180',
            'desc_ru' => 'string|min:3|max:180',

            'phone' => 'string',


        ];
    }
}
