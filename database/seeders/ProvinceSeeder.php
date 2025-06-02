<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // إدراج محافظات المملكة العربية السعودية
        $saudiArabia = DB::table('countries')->where('code', 'SAU')->first();
        DB::table('provinces')->insert([
            ['name' => 'الرياض', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'مكة المكرمة', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'المدينة المنورة', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'القصيم', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الشرقية', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'عسير', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'تبوك', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'حائل', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الحدود الشمالية', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'جازان', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'نجران', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الباحة', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الجوف', 'country_id' => $saudiArabia->id, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // إدراج محافظات مصر
        $egypt = DB::table('countries')->where('code', 'EGY')->first();
        DB::table('provinces')->insert([
            ['name' => 'القاهرة', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الإسكندرية', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الجيزة', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الدقهلية', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'البحر الأحمر', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الفيوم', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الغربية', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الإسماعيلية', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'المنوفية', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'قنا', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'سوهاج', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'أسوان', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'دمياط', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'بورسعيد', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'شمال سيناء', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'جنوب سيناء', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'كفر الشيخ', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'مطروح', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الأقصر', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الوادي الجديد', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'السويس', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'مرسى مطروح', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'بني سويف', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'المنيا', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'أسيوط', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الشرقية', 'country_id' => $egypt->id, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // الحصول على معرف دولة فلسطين من جدول countries
        $palestine = DB::table('countries')->where('code', 'PS')->first();

        // إدراج محافظات فلسطين
        DB::table('provinces')->insert([
            ['name' => 'القدس','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'رام الله والبيرة','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'بيت لحم','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'أريحا','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'نابلس','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'طولكرم','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'قلقيلية','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'سلفيت','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'جنين','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'طوباس','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'غزة','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'شمال غزة','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'دير البلح','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'خان يونس','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'رفح','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()],
            ['name' => 'الخليل','country_id' => $palestine->id,'created_at' => now(),'updated_at' => now()]
        ]);
    }
}
