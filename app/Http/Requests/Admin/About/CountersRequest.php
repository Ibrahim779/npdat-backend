<?php

namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;

class CountersRequest extends FormRequest
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
            'counter_1_num' => 'required|numeric',
            'counter_1_title_en' => 'required|string|min:3|max:255',
            'counter_1_title_ar' => 'required|string|min:3|max:255',
            'counter_2_num' => 'required|numeric',
            'counter_2_title_en' => 'required|string|min:3|max:255',
            'counter_2_title_ar' => 'required|string|min:3|max:255',
            'counter_3_num' => 'required|numeric',
            'counter_3_title_en' => 'required|string|min:3|max:255',
            'counter_3_title_ar' => 'required|string|min:3|max:255',
            'counter_4_num' => 'required|numeric',
            'counter_4_title_en' => 'required|string|min:3|max:255',
            'counter_4_title_ar' => 'required|string|min:3|max:255',
        ];
    }
}
