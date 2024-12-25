<?php

namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;

class CeoRequest extends FormRequest
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
            'ceo_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'ceo_title_en' => 'required|string|min:3|max:255',
            'ceo_title_ar' => 'required|string|min:3|max:255',
            'ceo_main_title_en' => 'required|string|min:3|max:255',
            'ceo_main_title_ar' => 'required|string|min:3|max:255',
            'ceo_name_en' => 'required|string|min:20',
            'ceo_name_ar' => 'required|string|min:20',
            'ceo_word_en' => 'required|string|min:20',
            'ceo_word_ar' => 'required|string|min:20',
            'help_text_en' => 'required|string|min:20',
            'help_text_ar' => 'required|string|min:20',
        ];
    }
}
