<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    
    public function run():void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'calculadora'])->assignRole($role1);
        Permission::create(['name' => 'prueba'])->assignRole($role1);
        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'aprendices'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'aprendices.add'])->assignRole($role1);
        Permission::create(['name' => 'aprendices.edit'])->assignRole($role1);
        Permission::create(['name' => 'aprendices.delete'])->assignRole($role1);
        
    }
}
