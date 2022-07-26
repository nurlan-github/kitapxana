<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|min:2',
            'phone' => 'required|min:9',
            'group_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name is required!',
            'name.min' => 'name must have minimum 2 simvols',
            'phone.required' => 'phone is required!',
            'phone.min' => 'phone should have min 9 simvols',
            'group_id.required' => 'id is required!'
        ];
    }
}
