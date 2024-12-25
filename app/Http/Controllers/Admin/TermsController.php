<?php

namespace App\Http\Controllers\Admin;

use App\Models\Term;
use App\Http\Requests\Admin\TermRequest;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Term::class);

        $terms = Term::paginate(10);

        return view('dashboard.terms.index', compact('terms'));
    }

    public function create()
    {
        $this->authorize('create', Term::class);

        return view('dashboard.terms.create');
    }

    public function store(TermRequest $request)
    {
        $this->authorize('create', Term::class);

        Term::create([
            'title' => [
                'en' => $request->term_en,
                'ar' => $request->term_ar
            ],
            'body' => [
                'en' => $request->body_en,
                'ar' => $request->body_ar,
            ]
        ]);

        toast(trans('main.term_created'), 'success');

        return to_route('admin.terms.index');
    }

    public function edit(Term $term)
    {
        $this->authorize('update', Term::class);

        return view('dashboard.terms.edit', compact('term'));
    }

    public function update(Term $term, TermRequest $request)
    {
        $this->authorize('update', Term::class);

        $term->update([
            'title' => [
                'en' => $request->term_en,
                'ar' => $request->term_ar,
            ],
            'body' => [
                'en' => $request->body_en,
                'ar' => $request->body_ar,
            ]
        ]);

        toast(trans('main.term_updated'), 'success');

        return back();
    }

    public function destroy(Term $term)
    {
        $this->authorize('delete', Term::class);

        $term->delete();

        toast(trans('main.term_deleted'), 'success');

        return to_route('admin.terms.index');
    }
}
