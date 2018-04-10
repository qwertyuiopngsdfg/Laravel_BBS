<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'skype' => 'required|alpha_dash',
            'title' => 'max:20',
            'body' => 'required|max:255',
            'password' => 'required|min:8'
        ];
    }

     /**
     * Get the error message that apply to the request.
     *
     * @return array
     */
    public function messages(){
        return [
        'skype.required' => 'Please enter SkypeID',
        'skype.alpha_dash' => 'SkypeID is Invalid',
        'body.required' => 'Please enter body',
        'body.max' => 'Must less than 255 characters in length',
        'title.max' => 'Must less than 20 characters in length',
        'password.required' => 'Please enter password',
        'password.min' => 'Must higher than 8 characters in length'
        ];
    }
    
}
