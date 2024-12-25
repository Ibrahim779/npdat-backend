<?php

namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;

class GoalsRequest extends FormRequest
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
            'goals_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'goals_title_en' => 'required|string|min:3|max:255',
            'goals_title_ar' => 'required|string|min:3|max:255',
            'vision_title_en' => 'required|string|min:3|max:255',
            'vision_title_ar' => 'required|string|min:3|max:255',
            'vision_description_en' => 'required|string|min:20',
            'vision_description_ar' => 'required|string|min:20',
            'mission_title_en' => 'required|string|min:3|max:255',
            'mission_title_ar' => 'required|string|min:3|max:255',
            'mission_description_en' => 'required|string|min:20',
            'mission_description_ar' => 'required|string|min:20',
            'team_title_en' => 'required|string|min:3|max:255',
            'team_title_ar' => 'required|string|min:3|max:255',
            'team_description_en' => 'required|string|min:20',
            'team_description_ar' => 'required|string|min:20',
        ];
    }
}
