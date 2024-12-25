<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Admin;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Admin::class);

        $admins = Admin::get();

        return view('dashboard.admins.index', compact('admins'));
    }

    public function create()
    {
        $this->authorize('create', Admin::class);

        $roles = Role::get();

        return view('dashboard.admins.create', compact('roles'));
    }

    public function store(AdminRequest $request)
    {
        $this->authorize('create', Admin::class);

        $admin = Admin::create($request->validated());

        $admin->syncRoles($request->roles);

        toast(trans('main.admin_created'), 'success');

        return to_route('admin.admins.index');
    }

    public function edit(Admin $admin)
    {
        $this->authorize('update', Admin::class);

        $roles = Role::get();

        return view('dashboard.admins.edit', compact('admin', 'roles'));
    }

    public function update(Admin $admin, AdminRequest $request)
    {
        $this->authorize('update', Admin::class);

        $admin->update($request->validated());

        $admin->syncRoles($request->roles);

        toast(trans('main.admin_updated'), 'success');

        return to_route('admin.admins.index');
    }

    public function destroy(Admin $admin)
    {
        $this->authorize('delete', Admin::class);

        $admin->delete();

        toast(trans('main.admin_deleted'), 'success');

        return back();
    }
}
