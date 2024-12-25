<?php

namespace App\Http\Requests\Admin;

use App\Models\Question;
use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'category' => 'in:0,1,2|required',
            'question_en' => 'required|min:3|max:255',
            'question_ar' => 'required|min:3|max:255',
            'answer_en' => 'required|min:3',
            'answer_ar' => 'required|min:3',
        ];
    }

    public function validated($key = null, $default = null)
    {
        return array_merge(
            getTranslatableData(Question::TRANS_FIELDS),
            parent::validated()
        );
    }
}
