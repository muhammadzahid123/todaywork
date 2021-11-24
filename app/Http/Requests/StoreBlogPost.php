<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'email1' => ['bail', 'numeric', 'size:2','required'],
            // 'email2' => 'bail|gte:email1|required',
            // 'content' => 'bail|ends_with:thanks|required',
            // 'photo' => 'bail|image|required',
            // 'check.*.id' => 'distinct',

            // 'tos' => 'boolean',
            // 'website' => 'required|active_url',
            // 'start_date' => 'required|date',
            // 'end_date' => 'required|date|after_or_equal:start_date'
        ];
    }

    public function messages()
    {
      return  ['title.required' => 'title is a required field'];
    }

    public function attributes()
    {
        return [
            'photo'=>'logo',
            'check'=>'study',
            'start_date' => 'start_date',
            'end_date'=> 'end_date'
        ];
    }
}
