<?php

namespace App\Http\Requests\Admin\Rova;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_title_en' => 'required',
            'product_title_ar' => 'required',
            'product_description_en' => 'required',
            'product_description_ar' => 'required',
        ];
    }
}
