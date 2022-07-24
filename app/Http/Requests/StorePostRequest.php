<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:posts|min:5',
            'body' => 'required',
        ];
    }


    public function messages(){
return  [
    'title.required' => 'title reqired!',
    'title.min' => 'title min 5!',
    'body.required' => 'body reqired!',
];
    }
}
