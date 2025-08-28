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
        $roles = config('roles.roles');

        foreach ($roles as $key => $roleData) {
            $role = Role::firstOrCreate(
                ['key' => $key],
                ['color' => $roleData['color']]
            );

            foreach ($roleData['translations'] as $locale => $name) {
                RoleTranslation::updateOrInsert(
                    ['role_id' => $role->id, 'locale' => $locale],
                    ['name' => $name]
                );
            }
        }

        $permission_administrator = Permission::where('key','!=','banned')->pluck('id')->toArray();
        $permission_vendor = Permission::where('key','!=','administrator')->pluck('id')->toArray();

        $admin_role = Role::where('key','admin')->first();
        $admin_role->permission()->sync($permission_administrator);

        $vendor_role = Role::where('key','vendor')->first();
        $vendor_role->permission()->sync($permission_vendor);
    }
}
