<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'email' => 'required',
            'dob' => 'required',
        ];
    }

    // public function message()
    // {
    //     $messages = [
    //         'name.required' => 'We need to know your full name!',
    //         'name.min' => 'Name size must be between 2 and 30!',
    //         'name.max' => 'Name size must be between 2 and 30!',
    //         'dob.required' => 'We need to know your age!',
    //         'email.required' => 'Email is required',

    //     ];

    //     return $messages;
    // }

    
}
