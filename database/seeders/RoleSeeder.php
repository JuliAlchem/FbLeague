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
       $roleAdm = Role::create(['name' => 'Admin']);
       $roleVisit = Role::create(['name' => 'Visitor']);

        Permission::create(['name' => '']);
    }
}