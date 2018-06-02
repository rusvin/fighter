<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\CheckAvatar;

class UserUpdateAvatar extends FormRequest
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
            'avatar' =>  ['nullable', new CheckAvatar()],
        ];
    }

    public function attributes()
    {
        return [
            'avatar' => "аватар",
        ];
    }
    public function messages()
    {
        return [
  //          'avatar.required' => "Поле :attribute обов'язкове для заповнення",
        ];
    }

}
