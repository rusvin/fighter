<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\CheckOldPassword;

class UserUpdatePassword extends FormRequest
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
            'password' => 'required|min:6|confirmed',
            'old_password' =>  ['required', new CheckOldPassword()],
        ];
    }

    public function attributes()
    {
        return [
            'password' => "пароль",
            'old_password' => 'старий пароль'
        ];
    }
    public function messages()
    {
        return [
            'password.required' => "Поле :attribute обов'язкове для заповнення",
            'old_password.required' => "Поле :attribute обов'язкове для заповнення",
            'password.confirmed' => "Паролі не збігаються",
            'password.max' => 'Поле :attribute маэ бути не більше 50 символів',
            'password.min' => 'Поле :attribute маэ бути не менше 6 символів'
        ];
    }

}
