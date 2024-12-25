<?php

namespace App\Http\Requests\Admin\Rova;

use Illuminate\Foundation\Http\FormRequest;

class FirstSectionRequest extends FormRequest
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
            'first_section_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'first_section_title_en' => 'required',
            'first_section_title_ar' => 'required',
            'first_section_description_en' => 'required',
            'first_section_description_ar' => 'required',
        ];
    }
}
