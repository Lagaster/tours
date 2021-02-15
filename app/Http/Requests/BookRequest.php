<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'first' => "required|string",
            'second' => "required|string",
            'phone' => "required|alpha_num",
            'tour' => "required|string",
            'description' => "nullable",
            'adult' => "required|numeric",
            'child' => "required|numeric"
        ];
    }
}