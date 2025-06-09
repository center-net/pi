<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\PermissionTranslation;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'key'       => 'merchants',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'key'       => 'administrator',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'key'       => 'banned',
            'table_name' => null,
        ]);

        PermissionTranslation::updateOrInsert(
            ['permission_id' => 1,  'locale' => 'en'],
            ['name' => 'merchants']
        );
        PermissionTranslation::updateOrInsert(
            ['permission_id' => 1,  'locale' => 'ar'],
            ['name' => 'التجار']
        );
        PermissionTranslation::updateOrInsert(
            ['permission_id' => 2,  'locale' => 'en'],
            ['name' => 'Administrator']
        );
        PermissionTranslation::updateOrInsert(
            ['permission_id' => 2,  'locale' => 'ar'],
            ['name' => 'الإدارة']
        );
        PermissionTranslation::updateOrInsert(
            ['permission_id' => 3,  'locale' => 'en'],
            ['name' => 'Banned']
        );
        PermissionTranslation::updateOrInsert(
            ['permission_id' => 3,  'locale' => 'ar'],
            ['name' => 'محظور']
        );

        Permission::generateFor('permissions');
        Permission::generateFor('roles');
        Permission::generateFor('users');
        Permission::generateFor('settings');
        Permission::generateFor('countries');
        Permission::generateFor('provinces');

        Permission::generateForar('الصلاحيات', 'permissions');
        Permission::generateForar('الأدوار', 'roles');
        Permission::generateForar('الأعضاء', 'users');
        Permission::generateForar('الإعدادات','settings');
        Permission::generateForar('الدول','countries');
        Permission::generateForar('المحافظات','provinces');

        
    }
}
