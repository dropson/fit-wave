<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permission::firstOrCreate(['name' => 'createClient']);
  
        // Admin role
        $role = Role::firstOrCreate(['name' => UserRoleEnum::Admin->value]);
        // $role->givePermissionTo('edit articles');

        // Coach role
        $role = Role::firstOrCreate(['name' => UserRoleEnum::Coach->value]);

        // Client role
        $role = Role::firstOrCreate(['name' => UserRoleEnum::Client->value]);
        // $role->givePermissionTo('edit articles');
    }
}
