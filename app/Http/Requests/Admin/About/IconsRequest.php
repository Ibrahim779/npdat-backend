<?php

namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;

class IconsRequest extends FormRequest
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
            'icon_1_title_en' => 'required|string|min:3|max:255',
            'icon_1_title_ar' => 'required|string|min:3|max:255',
            'icon_1_description_en' => 'required|string|min:20',
            'icon_1_description_ar' => 'required|string|min:20',
            'icon_2_title_en' => 'required|string|min:3|max:255',
            'icon_2_title_ar' => 'required|string|min:3|max:255',
            'icon_2_description_en' => 'required|string|min:20',
            'icon_2_description_ar' => 'required|string|min:20',
            'icon_3_title_en' => 'required|string|min:3|max:255',   
            'icon_3_title_ar' => 'required|string|min:3|max:255',
            'icon_3_description_en' => 'required|string|min:20',
            'icon_3_description_ar' => 'required|string|min:20',
            'icon_4_title_en' => 'required|string|min:3|max:255',
            'icon_4_title_ar' => 'required|string|min:3|max:255',
            'icon_4_description_en' => 'required|string|min:20',
            'icon_4_description_ar' => 'required|string|min:20',
        ];
    }
}
