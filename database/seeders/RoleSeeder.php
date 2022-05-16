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

        Permission::create(['name' => 'admin.home'])->syncRoles([$roleAdm, $roleVisit]);
        /* Users */
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$roleAdm]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$roleAdm]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$roleAdm]);
        /* Players */
        Permission::create(['name' => 'admin.players.index'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.players.create'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.players.edit'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.players.destroy'])->syncRoles([$roleAdm, $roleVisit]);
        /* Teams */
        Permission::create(['name' => 'admin.teams.index'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.teams.create'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.teams.edit'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.teams.destroy'])->syncRoles([$roleAdm, $roleVisit]);
        /* Games */
        Permission::create(['name' => 'admin.games.index'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.games.create'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.games.edit'])->syncRoles([$roleAdm, $roleVisit]);
        Permission::create(['name' => 'admin.games.destroy'])->syncRoles([$roleAdm, $roleVisit]);

        
    }
}
