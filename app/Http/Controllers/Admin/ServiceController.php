<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Service::class);

        $services = Service::paginate(10);

        return view('dashboard.services.index', compact('services'));
    }

    public function create()
    {
        $this->authorize('create', Service::class);

        return view('dashboard.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $this->authorize('create', Service::class);

        Service::create($request->validated());

        toast(trans('main.service_created'), 'success');

        return to_route('admin.services.index');
    }

    public function edit(Service $service)
    {
        $this->authorize('update', Service::class);

        return view('dashboard.services.edit', compact('service'));
    }

    public function update(Service $service, ServiceRequest $request)
    {
        $this->authorize('update', Service::class);

        $service->update($request->validated());

        toast(trans('main.service_updated'), 'success');

        return to_route('admin.services.index');
    }

    public function destroy(Service $service)
    {
        $this->authorize('delete', Service::class);

        $service->delete();

        toast(trans('main.service_deleted'), 'success');

        return to_route('admin.services.index');
    }
}
