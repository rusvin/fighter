<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Intervention\Image\Facades\Image;

class CheckAvatar implements Rule
{

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($value){
            try {
                Image::make($value);
            } catch (\Exception $e) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Сталася помилка';
    }
}
