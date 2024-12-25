<?php

namespace App\Http\Requests\Admin\Npdat;

use Illuminate\Foundation\Http\FormRequest;

class App2Request extends FormRequest
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
            'app_2_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'app_2_title_en' => 'required|string|min:3|max:255',
            'app_2_title_ar' => 'required|string|min:3|max:255',
            'app_2_description_en' => 'required|string|min:20',
            'app_2_description_ar' => 'required|string|min:20',
            'app_2_link' => 'required|string|min:1|max:255',
        ];
    }
}
