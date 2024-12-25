<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'image' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'status' => 'in:1',
            'position' => 'nullable|in:0,1,2',
            'title_en' => 'required|string|min:3|max:50',
            'title_ar' => 'required|string|min:3|max:50',
            'body_en' => 'nullable|string',
            'body_ar' => 'nullable|string',
            'description' => 'nullable|string|min:3|max:255',
            'keywords' => 'nullable|string|min:3|max:255',
        ];
    }
}
