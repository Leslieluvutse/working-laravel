<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Define roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Define permissions for users
        $userPermissions = [
            'view_dashboard',
            'edit_profile',
            'view_orders',
            'place_order',
            'view_notifications',
            'manage_subscription',
            'access_support'
        ];

        foreach ($userPermissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Define permissions for admins
        $adminPermissions = [
            'view_admin_dashboard',
            'manage_users',
            'manage_roles_and_permissions',
            'view_reports',
            'manage_products',
            'view_all_orders',
            'manage_orders',
            'manage_settings',
            'view_analytics',
            'manage_content'
        ];

        foreach ($adminPermissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo(array_merge($userPermissions, $adminPermissions));
        $userRole->givePermissionTo($userPermissions);
    }
}
