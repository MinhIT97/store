<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class product implements Rule
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
        //    Rule::unique('taggables')->where(function ($query) use($data1,$data2) {
        //         return $query->where('tag_id', $data1)
        //         ->where('taggable_id', $data2);
        //         }),
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
