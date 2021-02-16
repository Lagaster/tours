<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FutureDate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $startDate;
    public function __construct($startDate)
    {
        $this->startDate = $startDate;
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
        $data = ($value < $this->startDate);

        if (!$data) {

            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'End Date cannot be less than the start date!';
    }
}