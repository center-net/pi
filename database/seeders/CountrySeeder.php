<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // إدراج الدول العربية
        DB::table('countries')->insert([
            [
                'name' => 'المملكة العربية السعودية',
                'code' => 'SAU',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جمهورية مصر العربية',
                'code' => 'EGY',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'الجمهورية العربية السورية',
                'code' => 'SYR',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // يمكن إضافة باقي الدول العربية بنفس الطريقة
            [
                'name' => 'الجمهورية اللبنانية',
                'code' => 'LBN',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'المملكة الأردنية الهاشمية',
                'code' => 'JOR',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'الجمهورية العراقية',
                'code' => 'IRQ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'دولة الكويت',
                'code' => 'KWT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'دولة قطر',
                'code' => 'QAT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'الإمارات العربية المتحدة',
                'code' => 'ARE',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'سلطنة عمان',
                'code' => 'OMN',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'الجمهورية اليمنية',
                'code' => 'YEM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'المملكة المغربية',
                'code' => 'MAR',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'الجمهورية الجزائرية الديمقراطية الشعبية',
                'code' => 'DZA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'الجمهورية التونسية',
                'code' => 'TUN',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'دولة ليبيا',
                'code' => 'LBY',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جمهورية السودان',
                'code' => 'SDN',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جمهورية الصومال',
                'code' => 'SOM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جمهورية جيبوتي',
                'code' => 'DJI',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جمهورية القمر المتحدة',
                'code' => 'COM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'دولة فلسطين',
                'code' => 'PS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'جمهورية موريتانيا الإسلامية',
                'code' => 'MRT',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
