<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrontCommentRequest extends FormRequest
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
            'comment' => 'string|max:245|min:4',
            'user_id' => 'integer|min:1|exists:users,id',
            'place_id' => 'integer|min:1|exists:places,id',
            'likes' => 'integer|max:1|min:0',
            'email' => 'email',
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => trans('validation.required') ,
            'comment.string' => trans('validation.string') ,
            'comment.max:245' => trans('validation.max') ,
            'comment.min:4' => trans('validation.min') ,

            'user_id.integer' => trans('validation.integer') ,
            'user_id.exists:users,id' => trans('validation.exists') ,

            'place_id.integer' => trans('validation.integer') ,
            'place_id.exists:places,id' => trans('validation.exists') ,
            'likes.integer' => trans('validation.integer') ,
            'likes.min:0' => trans('validation.min') ,
            'likes.max:1' => trans('validation.max') ,
            'email.email' => trans('validation.email') ,


        ];
    }
}
