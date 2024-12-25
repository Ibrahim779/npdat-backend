<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuoteRequest;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Quote::class);

        $quotes = Quote::paginate(10);

        return view('dashboard.quotes.index', compact('quotes'));
    }

    public function create()
    {
        $this->authorize('create', Quote::class);

        return view('dashboard.quotes.create');
    }

    public function store(QuoteRequest $request)
    {
        $this->authorize('create', Quote::class);

        Quote::create($request->validated());

        toast(trans('main.quote_created'), 'success');

        return to_route('admin.quotes.index');
    }

    public function edit(Quote $quote)
    {
        $this->authorize('update', Quote::class);

        return view('dashboard.quotes.edit', compact('quote'));
    }

    public function update(Quote $quote, QuoteRequest $request)
    {
        $this->authorize('update', Quote::class);

        $quote->update($request->validated());

        toast(trans('main.quote_updated'), 'success');

        return to_route('admin.quotes.index');
    }

    public function destroy(Quote $quote)
    {
        $this->authorize('delete', Quote::class);

        $quote->delete();

        toast(trans('main.quote_deleted'), 'success');

        return to_route('admin.quotes.index');
    }
}
