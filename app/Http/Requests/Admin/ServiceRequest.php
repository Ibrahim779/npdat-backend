<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
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
            'image' => ['mimes:jpeg,jpg,png|max:5000', Rule::requiredIf($this->method() == 'POST')],
            'name.*' => 'required|string|min:3|max:50',
            'title.*' => 'required|string|min:3|max:50',
            'description.*' => 'required|string|min:3|max:255',
        ];
    }
}
