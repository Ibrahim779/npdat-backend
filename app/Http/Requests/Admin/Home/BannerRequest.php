<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'banner_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'banner_title_en' => 'nullable|string|min:3|max:255',
            'banner_title_ar' => 'nullable|string|min:3|max:255',
            'banner_description_en' => 'nullable|string|min:20',
            'banner_description_ar' => 'nullable|string|min:20',
        ];
    }
}
