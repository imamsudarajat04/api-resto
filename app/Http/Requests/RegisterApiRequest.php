<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required|regex:/^[\pL\s\-]+$/u',
            'email'    => 'required|unique:users,email',
            'password' => 'required|min:3|confirmed',
            'no_hp'    => 'required|min:11|max:13',
        ];
    }
}
