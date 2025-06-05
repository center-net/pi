<?php

namespace Database\Seeders;

use App\Models\UserTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserTranslation::updateOrInsert(
            ['user_id' => 1,  'locale' => 'en'],
            ['name' => 'Mohamed Youssef']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 1,  'locale' => 'ar'],
            ['name' => 'محمد يوسف']
        );
        
        UserTranslation::updateOrInsert(
            ['user_id' => 2,  'locale' => 'en'],
            ['name' => 'Supervisor']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 2,  'locale' => 'ar'],
            ['name' => 'المشرف']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 3,  'locale' => 'en'],
            ['name' => 'Moderator']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 3,  'locale' => 'ar'],
            ['name' => 'مراقب']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 4,  'locale' => 'en'],
            ['name' => 'Vendor']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 4,  'locale' => 'ar'],
            ['name' => 'تاجر']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 5,  'locale' => 'en'],
            ['name' => 'customer']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 5,  'locale' => 'ar'],
            ['name' => 'زبون']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 6,  'locale' => 'en'],
            ['name' => 'banned']
        );

        UserTranslation::updateOrInsert(
            ['user_id' => 6,  'locale' => 'ar'],
            ['name' => 'محظور']
        );
    }
}
