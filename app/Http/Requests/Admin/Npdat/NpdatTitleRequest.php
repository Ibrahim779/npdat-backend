<?php

namespace App\Http\Requests\Admin\Npdat;

use Illuminate\Foundation\Http\FormRequest;

class NpdatTitleRequest extends FormRequest
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
            'npdat_title_en' => 'required|string|min:3|max:255',
            'npdat_title_ar' => 'required|string|min:3|max:255',
        ];
    }
}