<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Question::class);

        $questions = Question::paginate(10);
        $categories = Question::CATEGORIES;

        return view('dashboard.questions.index', compact('questions', 'categories'));
    }

    public function create()
    {
        $this->authorize('create', Question::class);
        $categories = Question::CATEGORIES;
        return view('dashboard.questions.create', compact('categories'));
    }

    public function store(QuestionRequest $request)
    {
        $this->authorize('create', Question::class);

        Question::create($request->validated());

        toast(trans('main.question_created'), 'success');

        return to_route('admin.questions.index');
    }

    public function edit(Question $question)
    {
        $this->authorize('update', Question::class);
        $categories = Question::CATEGORIES;
        return view('dashboard.questions.edit', compact('question', 'categories'));
    }

    public function update(Question $question, QuestionRequest $request)
    {
        $this->authorize('update', Question::class);

        $question->update($request->validated());

        toast(trans('main.question_updated'), 'success');

        return to_route('admin.questions.index');
    }

    public function destroy(Question $question)
    {
        $this->authorize('delete', Question::class);

        $question->delete();

        toast(trans('main.question_deleted'), 'success');

        return to_route('admin.questions.index');
    }

    public function changeCategory(Request $request, Question $question)
    {
        $request->validate([
            'category' => 'in:0,1,2|required'
        ]);
        $question->update([
            'category' => $request->category
        ]);
        return response()->json($question);
    }
}
