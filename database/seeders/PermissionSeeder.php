<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Services\Permissions\GeneratePermissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin::truncate();
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        GeneratePermissions::generatePermissions();

        $role = Role::firstOrCreate(['name' => 'super-admin', 'guard_name' => 'admin']);
        $role->syncPermissions(Permission::all()->pluck('name'));
        // gets all permissions via Gate::before rule; see AuthServiceProvide

        // create demo users
        $admin = Admin::create([
            'name' => 'Super-Admin',
            'email' => 'superadmin@admin.com',
            'password' => 'password'
        ]);
        $admin->assignRole($role);
    }
}
