<?php

namespace App\Http\Requests\Admin\Rova;

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
            'goals_first_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'goals_second_image' => 'nullable|mimes:jpeg,jpg,png,svg|max:5000',
            'goals_title_en' => 'required',
            'goals_title_ar' => 'required',
            'goals_description_en' => 'required',
            'goals_description_ar' => 'required',
            'goals_list_item_en' => 'required',
            'goals_list_item_ar' => 'required',
            'goals_list_item1_en' => 'required',
            'goals_list_item1_ar' => 'required',
            
        ];
    }
}
