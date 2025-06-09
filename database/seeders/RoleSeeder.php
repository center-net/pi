<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleTranslation;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'key' => 'admin',
            'color' => 'bg-red-700 text-white',
        ]);

        Role::firstOrCreate([
            'key' => 'supervisor',
            'color' => 'bg-orange-600 text-white',
        ]);

        Role::firstOrCreate([
            'key' => 'moderator',
            'color' => 'bg-green-600 text-white',
        ]);

        Role::firstOrCreate([
            'key' => 'vendor',
            'color' => 'bg-gray-100 text-black',
        ]);

        Role::firstOrCreate([
            'key' => 'customer',
            'color' => 'bg-gray-100 text-black',
        ]);

        Role::firstOrCreate([
            'key' => 'banned',
            'color' => 'bg-gray-600 text-white',
        ]);
        RoleTranslation::updateOrInsert(
            ['role_id' => 1,  'locale' => 'en'],
            ['name' => 'admin']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 1,  'locale' => 'ar'],
            ['name' => 'المسؤول']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 2,  'locale' => 'en'],
            ['name' => 'supervisor']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 2,  'locale' => 'ar'],
            ['name' => 'المشرف']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 3,  'locale' => 'en'],
            ['name' => 'moderator']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 3,  'locale' => 'ar'],
            ['name' => 'مراقب']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 4,  'locale' => 'en'],
            ['name' => 'vendor']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 4,  'locale' => 'ar'],
            ['name' => 'تاجر']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 5,  'locale' => 'en'],
            ['name' => 'customer']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 5,  'locale' => 'ar'],
            ['name' => 'زبون']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 6,  'locale' => 'en'],
            ['name' => 'banned']
        );
        RoleTranslation::updateOrInsert(
            ['role_id' => 6,  'locale' => 'ar'],
            ['name' => 'محظور']
        );

        $permission_administrator = Permission::where('key','!=','banned')->pluck('id')->toArray();
        $permission_vendor = Permission::where('key','!=','administrator')->pluck('id')->toArray();

        $admin_role = Role::where('key','admin')->first();
        $admin_role->permission()->sync($permission_administrator);

        $vendor_role = Role::where('key','vendor')->first();
        $vendor_role->permission()->sync($permission_vendor);
    }
}
