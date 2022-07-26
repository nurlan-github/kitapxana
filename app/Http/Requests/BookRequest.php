<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => 'required',
            'count' => 'required',
            'category_id' => 'required',
            'author_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name required',
            'category_id.required' => 'required',
            'author_id.required' => 'required',
            'count.required' => 'required'
        ];
    }
}
