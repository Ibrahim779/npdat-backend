<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class NpdatRequest extends FormRequest
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
            'npdat_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'npdat_title_en' => 'required|string|min:3|max:255',
            'npdat_title_ar' => 'required|string|min:3|max:255',
            'npdat_main_title_en' => 'required|string|min:3|max:255',
            'npdat_main_title_ar' => 'required|string|min:3|max:255',
            'npdat_description_en' => 'required|string|min:20',
            'npdat_description_ar' => 'required|string|min:20',
        ];
    }
}
