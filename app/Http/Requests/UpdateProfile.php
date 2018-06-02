<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateProfile extends FormRequest
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
    public function rules(Request $request)
    {
            return [
                'nickname' => 'max:10|min:2',
                'email' => 'required|email',
                'birthday' => 'required|date',
                'phone' => 'regex:/^\+380\d{3}\d{2}\d{2}\d{2}$/',
                'avatar' => '',
            ];
    }

    public function attributes()
    {
        return [
            'nickname' => "нікнейм",
            'birthday' => 'дата народження',
            'avatar' => 'аватар',
            'phone' => 'телефон',
            'email' => 'email',
        ];
    }
    public function messages()
    {
        return [
            'email.email' => 'Поле :attribute маэ містити коректну ел. пошту',
            'nickname.max' => 'Поле :attribute маэ бути не більше 10 символів',
            'nickname.min' => 'Поле :attribute маэ бути не менше 2 символів',
            'birthday.date' => 'Поле :attribute маэ містити коректний формат дати',
            'phone.regex' => 'Поле :attribute маэ мати коректний формат',
        ];
    }

}
