<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WeOfferRequest;
use App\Models\WeOffer;

class WeOfferController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', WeOffer::class);

        $weOffers = WeOffer::paginate(10);

        return view('dashboard.weOffers.index', compact('weOffers'));
    }

    public function create()
    {
        $this->authorize('create', WeOffer::class);

        return view('dashboard.weOffers.create');
    }

    public function store(WeOfferRequest $request)
    {
        $this->authorize('create', WeOffer::class);

        WeOffer::create($request->validated());

        toast(trans('main.weOffer_created'), 'success');

        return to_route('admin.weOffers.index');
    }

    public function edit(WeOffer $weOffer)
    {
        $this->authorize('update', WeOffer::class);

        return view('dashboard.weOffers.edit', compact('weOffer'));
    }

    public function update(WeOffer $weOffer, WeOfferRequest $request)
    {
        $this->authorize('update', WeOffer::class);

        $weOffer->update($request->validated());

        toast(trans('main.weOffer_updated'), 'success');

        return to_route('admin.weOffers.index');
    }

    public function destroy(WeOffer $weOffer)
    {
        $this->authorize('delete', WeOffer::class);

        $weOffer->delete();

        toast(trans('main.weOffer_deleted'), 'success');

        return to_route('admin.weOffers.index');
    }
}
