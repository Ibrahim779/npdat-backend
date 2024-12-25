<?php

namespace App\Http\Requests\Admin\Setting;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
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
            'logo' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'logo_2' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'title_en' => 'required|string|min:3|max:255',
            'title_ar' => 'required|string|min:3|max:255',
            'description_en' => 'required|string|min:20',
            'description_ar' => 'required|string|min:20',
            'address_en' => 'nullable|string|min:3|max:255',
            'address_ar' => 'nullable|string|min:3|max:255',
            'phone' => 'required|string|min:3|max:255',
            'phone_2' => 'nullable|string|min:3|max:255',
            'email' => 'nullable|email|max:255',
            'copyright' => 'nullable|string|min:3|max:255',
        ];
    }
}
