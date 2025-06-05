<?php

namespace Database\Seeders;

use App\Models\SettingTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        SettingTranslation::updateOrInsert(
                ['setting_id' => 1, 'locale' => 'en'],
                ['name' => 'pi network', 'address' => 'palestine']
            );
    
            SettingTranslation::updateOrInsert(
                ['setting_id' => 1, 'locale' => 'ar'],
                ['name' => 'موقع تجارة الكترونية', 'address' => 'فلسطين']
            );
    }
}
