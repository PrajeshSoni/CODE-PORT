<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // 'role-list',
            // 'role-create',
            // 'role-edit',
            // 'role-delete',
            // 'product-list',
            // 'product-create',
            // 'product-edit',
            // 'product-delete',
            // 'profile-edit',
            // 'profile-list',
            // 'profile-create',
            // 'profile-delete',
            'Question-list',
            'Question-create',
            'Question-edit',
            'Question-delete',
            'Tag-list',
            'Tag-create',
            'Tag-edit',
            'Tag-delete',
            'replay-create',
            'replay-delete'

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
