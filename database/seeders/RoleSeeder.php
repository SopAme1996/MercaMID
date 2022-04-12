<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'ADMINISTRADOR']);
        $vendedor = Role::create(['name' => 'VENDEDOR']);

        $permission = Permission::create(['name' => 'admin.dashboard'])->syncRoles([$admin, $vendedor]);

        
    }
}
