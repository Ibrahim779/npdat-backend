<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleRequest;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Role::class);

        $roles = Role::get();

        return view('dashboard.roles.index', compact('roles'));
    }

    public function create()
    {
        $this->authorize('create', Role::class);

        $permissions = Permission::get()->groupBy('model');

        return view('dashboard.roles.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $this->authorize('create', Role::class);

        $role = Role::create($request->validated());

        $role->syncPermissions(request()->permissions);

        toast(trans('main.role_created'), 'success');

        return to_route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        $this->authorize('update', Role::class);

        $permissions = Permission::get()->groupBy('model');

        return view('dashboard.roles.edit', compact('role', 'permissions'));
    }

    public function update(Role $role, RoleRequest $request)
    {
        $this->authorize('update', Role::class);

        $role->update($request->validated());

        $role->syncPermissions(request()->permissions);

        toast(trans('main.role_updated'), 'success');

        return to_route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        $this->authorize('delete', Role::class);

        $role->delete();

        toast(trans('main.role_deleted'), 'success');

        return back();
    }
}
