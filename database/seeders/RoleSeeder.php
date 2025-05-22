<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => 'المسؤول',
            'key' => 'admin',
            'color' => 'bg-red-700 text-white',
        ]);

        Role::firstOrCreate([
            'name' => 'المشرف',
            'key' => 'supervisor',
            'color' => 'bg-orange-600 text-white',
        ]);

        Role::firstOrCreate([
            'name' => 'مراقب',
            'key' => 'moderator',
            'color' => 'bg-green-600 text-white',
        ]);

        Role::firstOrCreate([
            'name' => 'تاجر',
            'key' => 'vendor',
            'color' => 'bg-gray-100 text-black',
        ]);

        Role::firstOrCreate([
            'name' => 'زبون',
            'key' => 'customer',
            'color' => 'bg-gray-100 text-black',
        ]);

        Role::firstOrCreate([
            'name' => 'محظور',
            'key' => 'banned',
            'color' => 'bg-gray-600 text-white',
        ]);

        $permission_administrator = Permission::where('key','!=','banned')->pluck('id')->toArray();

        $admin_role = Role::where('key','admin')->first();
        $admin_role->permission()->sync($permission_administrator);
    }
}
