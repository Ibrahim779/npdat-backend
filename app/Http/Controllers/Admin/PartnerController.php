<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Partner::class);

        $partners = Partner::paginate(10);

        return view('dashboard.partners.index', compact('partners'));
    }

    public function create()
    {
        $this->authorize('create', Partner::class);

        return view('dashboard.partners.create');
    }

    public function store(PartnerRequest $request)
    {
        $this->authorize('create', Partner::class);

        Partner::create($request->validated());

        toast(trans('main.partner_created'), 'success');

        return to_route('admin.partners.index');
    }

    public function edit(Partner $partner)
    {
        $this->authorize('update', Partner::class);

        return view('dashboard.partners.edit', compact('partner'));
    }

    public function update(Partner $partner, PartnerRequest $request)
    {
        $this->authorize('update', Partner::class);

        $partner->update($request->validated());

        toast(trans('main.partner_updated'), 'success');

        return to_route('admin.partners.index');
    }

    public function destroy(Partner $partner)
    {
        $this->authorize('delete', Partner::class);

        $partner->delete();

        toast(trans('main.partner_deleted'), 'success');

        return to_route('admin.partners.index');
    }
}
