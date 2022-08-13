<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
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
            'star' => 'integer:min:1',
            'body'=>'max:200'
        ];
    }
    public function messages()
    {
        return [
            'star.min' => 'Please give at least 1 star.',
            'body.max' => 'Please reduce the number of review words.',
        ];
    }
}
