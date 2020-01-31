<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class verificaCEP implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (preg_match("/^[0-9]{8}/", trim($value)) || preg_match("/^[0-9]{5}-[0-9]{3}/", trim($value))) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('CEP não está correto');
    }
}
