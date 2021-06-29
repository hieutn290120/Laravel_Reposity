<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ];
    }

    // public function message()
    // {
    //     return [
    //         'required' : ':attribute không được bỏ trống',
    //         'string' : ':attribute không được là một số',
    //         'min' : 'Độ dài tối thiểu :attribute kí tự',
    //         'max' : 'Độ dài tối đa :attribute kí tự',
    //         'unique' : ':attribute',
    //     ]
    // }
}
