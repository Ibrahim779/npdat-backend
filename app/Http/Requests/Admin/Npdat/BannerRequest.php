<?php

namespace App\Http\Requests\Admin\Npdat;

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
            'banner_image_1' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'banner_image_2' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            
            'banner_title_en' => 'required|string|min:3|max:255',
            'banner_title_ar' => 'required|string|min:3|max:255',
            'banner_description_en' => 'required|string|min:20',
            'banner_description_ar' => 'required|string|min:20',
            'banner_link_title_ar' => 'required|string|min:3|max:255',
            'banner_link_title_en' => 'required|string|min:3|max:255',
            'banner_link' => 'required|string|min:1|max:255',
            'banner_ios_app_link' => 'required|string|min:1|max:255',

        ];
    }
}
