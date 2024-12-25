<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class RovaRequest extends FormRequest
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
            'rova_image_1' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'rova_image_2' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'rova_title_en' => 'required|string|min:3|max:255',
            'rova_title_ar' => 'required|string|min:3|max:255',
            'rova_main_title_en' => 'required|string|min:3|max:255',
            'rova_main_title_ar' => 'required|string|min:3|max:255',
            'rova_description_en' => 'required|string|min:20',
            'rova_description_ar' => 'required|string|min:20',
        ];
    }
}
