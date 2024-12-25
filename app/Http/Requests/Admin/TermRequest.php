<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TermRequest extends FormRequest
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
            'term_en' => 'required|min:3|max:255',
            'term_ar' => 'required|min:3|max:255',
            'body_en' => 'required|min:3',
            'body_ar' => 'required|min:3',
        ];
    }
}
