<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=PermissionTableSeeder
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-module',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'role-module',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'master-module',
            'master-list',
            'master-create',
            'master-edit',
            'master-delete',
        ];

        foreach ($permissions as $permission) {
            $model = Permission::whereName($permission);
            if ($model->count() == 0) {
                Permission::create(['name' => $permission]);
            }

        }
    }
}
