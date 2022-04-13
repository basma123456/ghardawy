<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'title_ar' => 'required|string|max:110|min:3',
            'title_en' => 'required|string|max:110|min:3',
            'about_page_ar' => 'required|string|max:215|min:3',
            'about_page_en' => 'required|string|max:215|min:3',
            'likes' => 'required_without:id:unlikes',
            'unlikes' => 'required_without:id:likes',
            'status' => 'required|in:0,1',
//            'image' => 'nullable|array|min:7|max:7',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',

        ];
    }
}
