<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
            'likes' => 'required_without:unlikes',
            'unlikes' => 'required_without:likes',
            'seller_id' => 'required|int',
            'category' => 'required|int',
            'email' => 'sometimes|nullable|email',
            'phone' => 'required|string',
            'status' => 'required|in:0,1',
            'joining_date' => 'required|date',
            'image' => 'required|array|min:7|max:7',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

            'menu' => 'required|array|min:1|max:4',
            'menu.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',


        ];
    }
}
