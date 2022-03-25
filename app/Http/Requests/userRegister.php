<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRegister extends FormRequest
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
            'type' => 'required',
            'f_name' => 'required|string|max:35|min:3',
            'l_name' => 'required|string|max:35|min:3',
            'email' => 'required|string|email|unique:users',
            'gender' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ];
    }
    public function messages()
    {
        return [
            '*.required' => __('validation.required'),
            '*.string' => __('validation.string'),
            '*.max' => __('validation.max'),
            '*.min' => __('validation.min'),
            '*.email' => __('validation.email'),
            '*.unique' => __('validation.unique'),
            '*.confirmed' => __('validation.confirmed'),
            // 'f_name' => 'required|string|max:35|min:3',
            // 'l_name' => 'required|string|max:35|min:3',
            // 'email' => 'required|string|email|unique:users',
            // 'gender' => 'required',
            // 'password' => 'required|string|min:6|confirmed',
        ];
    }
}
