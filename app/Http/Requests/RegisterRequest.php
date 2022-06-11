<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (in_array($this->method(), ['PUT', 'PATCH'])) {

        }else{
            $rules = [
                'name'     => 'required|regex:/^[\pL\s\-]+$/u',
                'email'    => 'required|email|unique:users',
                'password' => 'required|min:3|confirmed',
                'no_hp'    => 'required|regex:/^[0-9]+$/',
            ];
        }

        return $rules;
    }
}
