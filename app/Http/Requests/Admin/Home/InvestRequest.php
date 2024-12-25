<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class InvestRequest extends FormRequest
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
            'invest_image_1' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'invest_image_2' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'invest_title_en' => 'required|string|min:3|max:255',
            'invest_title_ar' => 'required|string|min:3|max:255',
            'invest_main_title_en' => 'required|string|min:3|max:255',
            'invest_main_title_ar' => 'required|string|min:3|max:255',
            'invest_description_en' => 'required|string|min:20',
            'invest_description_ar' => 'required|string|min:20',
            'invest_list_1_en' => 'required|string|min:3|max:255',
            'invest_list_1_ar' => 'required|string|min:3|max:255',
            'invest_list_2_ar' => 'required|string|min:3|max:255',
            'invest_list_2_en' => 'required|string|min:3|max:255',
        ];
    }
}
