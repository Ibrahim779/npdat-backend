<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contact_title_en' => 'required|string|min:3|max:255',
            'contact_title_ar' => 'required|string|min:3|max:255',
            'contact_description_en' => 'required|string|min:20',
            'contact_description_ar' => 'required|string|min:20',
        ];
    }
}
