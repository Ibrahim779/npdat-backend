<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RovaReviewRequest;
use App\Models\RovaReview;

class RovaReviewController extends Controller
{
    public function index()
    {
        // $this->authorize('viewAny', RovaReview::class);

        $rova_reviews = RovaReview::paginate(10);

        return view('dashboard.rova_reviews.index', compact('rova_reviews'));
    }

    public function create()
    {
        // $this->authorize('create', RovaReview::class);

        return view('dashboard.rova_reviews.create');
    }

    public function store(RovaReviewRequest $request)
    {
        // $this->authorize('create', RovaReview::class);

        RovaReview::create($request->validated());

        toast(trans('main.rova_review_created'), 'success');

        return to_route('admin.rova-reviews.index');
    }

    public function edit(RovaReview $rova_review)
    {
        // $this->authorize('update', RovaReview::class);

        return view('dashboard.rova_reviews.edit', compact('rova_review'));
    }

    public function update(RovaReview $rova_review, RovaReviewRequest $request)
    {
        // $this->authorize('update', RovaReview::class);

        $rova_review->update($request->validated());

        toast(trans('main.rova_review_updated'), 'success');

        return to_route('admin.rova-reviews.index');
    }

    public function destroy(RovaReview $rova_review)
    {
        // $this->authorize('delete', RovaReview::class);

        $rova_review->delete();

        toast(trans('main.rova_review_deleted'), 'success');

        return to_route('admin.rova-reviews.index');
    }
}
