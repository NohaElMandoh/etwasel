<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vendorRegister extends FormRequest
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
            'title' => 'required|in:Mr,Mrs,Miss,Ms',
            'f_name' => 'required|string|max:40|min:3',
            'l_name' => 'required|string|max:40|min:3',
            'vendor_email' => 'required|string|email|unique:users,email',
            'vendor_password' => 'required|string|min:6|confirmed',
            'phone' => 'required|',
            'shop_name' => 'required|string|unique:users,shop_name|min:3|max:50',
            // 'country'=>''
            'city_id' => 'required|exists:cities,id',
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
