<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\CityTranslation;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all countries
        $countries = Country::all();

        // Cities data for each country
        $citiesData = [
            'SA' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الرياض'],
                        ['locale' => 'en', 'name' => 'Riyadh'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'جدة'],
                        ['locale' => 'en', 'name' => 'Jeddah'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'مكة المكرمة'],
                        ['locale' => 'en', 'name' => 'Mecca'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'المدينة المنورة'],
                        ['locale' => 'en', 'name' => 'Medina'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الدمام'],
                        ['locale' => 'en', 'name' => 'Dammam'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الخبر'],
                        ['locale' => 'en', 'name' => 'Khobar'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الظهران'],
                        ['locale' => 'en', 'name' => 'Dhahran'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'تبوك'],
                        ['locale' => 'en', 'name' => 'Tabuk'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'أبها'],
                        ['locale' => 'en', 'name' => 'Abha'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'حائل'],
                        ['locale' => 'en', 'name' => 'Hail'],
                    ]
                ],
            ],
            'EG' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'القاهرة'],
                        ['locale' => 'en', 'name' => 'Cairo'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الإسكندرية'],
                        ['locale' => 'en', 'name' => 'Alexandria'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الجيزة'],
                        ['locale' => 'en', 'name' => 'Giza'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'شبرا'],
                        ['locale' => 'en', 'name' => 'Shubra'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'المنصورة'],
                        ['locale' => 'en', 'name' => 'Mansoura'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الأقصر'],
                        ['locale' => 'en', 'name' => 'Luxor'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'أسوان'],
                        ['locale' => 'en', 'name' => 'Aswan'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الإسماعيلية'],
                        ['locale' => 'en', 'name' => 'Ismailia'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'بورسعيد'],
                        ['locale' => 'en', 'name' => 'Port Said'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'السويس'],
                        ['locale' => 'en', 'name' => 'Suez'],
                    ]
                ],
            ],
            'AE' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'أبوظبي'],
                        ['locale' => 'en', 'name' => 'Abu Dhabi'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'دبي'],
                        ['locale' => 'en', 'name' => 'Dubai'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الشارقة'],
                        ['locale' => 'en', 'name' => 'Sharjah'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'عجمان'],
                        ['locale' => 'en', 'name' => 'Ajman'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'أم القيوين'],
                        ['locale' => 'en', 'name' => 'Umm Al Quwain'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'رأس الخيمة'],
                        ['locale' => 'en', 'name' => 'Ras Al Khaimah'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الفجيرة'],
                        ['locale' => 'en', 'name' => 'Fujairah'],
                    ]
                ],
            ],
            'KW' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'مدينة الكويت'],
                        ['locale' => 'en', 'name' => 'Kuwait City'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'حولي'],
                        ['locale' => 'en', 'name' => 'Hawalli'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'السالمية'],
                        ['locale' => 'en', 'name' => 'Salmiya'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الجهراء'],
                        ['locale' => 'en', 'name' => 'Jahra'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الأحمدي'],
                        ['locale' => 'en', 'name' => 'Ahmadi'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الفروانية'],
                        ['locale' => 'en', 'name' => 'Farwaniya'],
                    ]
                ],
            ],
            'QA' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الدوحة'],
                        ['locale' => 'en', 'name' => 'Doha'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الريان'],
                        ['locale' => 'en', 'name' => 'Al Rayyan'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الوكرة'],
                        ['locale' => 'en', 'name' => 'Al Wakrah'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الخور'],
                        ['locale' => 'en', 'name' => 'Al Khor'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'دخان'],
                        ['locale' => 'en', 'name' => 'Dukhan'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'مسيعيد'],
                        ['locale' => 'en', 'name' => 'Mesaieed'],
                    ]
                ],
            ],
            'BH' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'المنامة'],
                        ['locale' => 'en', 'name' => 'Manama'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'المحرق'],
                        ['locale' => 'en', 'name' => 'Muharraq'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الرفاع'],
                        ['locale' => 'en', 'name' => 'Riffa'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'حمد'],
                        ['locale' => 'en', 'name' => 'Hamad Town'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'عيسى'],
                        ['locale' => 'en', 'name' => 'Isa Town'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'سترة'],
                        ['locale' => 'en', 'name' => 'Sitrah'],
                    ]
                ],
            ],
            'OM' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'مسقط'],
                        ['locale' => 'en', 'name' => 'Muscat'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'صلالة'],
                        ['locale' => 'en', 'name' => 'Salalah'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'نزوى'],
                        ['locale' => 'en', 'name' => 'Nizwa'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'صحار'],
                        ['locale' => 'en', 'name' => 'Sohar'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'صور'],
                        ['locale' => 'en', 'name' => 'Sur'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'إبراء'],
                        ['locale' => 'en', 'name' => 'Ibra'],
                    ]
                ],
            ],
            'JO' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'عمان'],
                        ['locale' => 'en', 'name' => 'Amman'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'إربد'],
                        ['locale' => 'en', 'name' => 'Irbid'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الزرقاء'],
                        ['locale' => 'en', 'name' => 'Zarqa'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'العقبة'],
                        ['locale' => 'en', 'name' => 'Aqaba'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'السلط'],
                        ['locale' => 'en', 'name' => 'Salt'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'مادبا'],
                        ['locale' => 'en', 'name' => 'Madaba'],
                    ]
                ],
            ],
            'LB' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'بيروت'],
                        ['locale' => 'en', 'name' => 'Beirut'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'طرابلس'],
                        ['locale' => 'en', 'name' => 'Tripoli'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'صيدا'],
                        ['locale' => 'en', 'name' => 'Sidon'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'صور'],
                        ['locale' => 'en', 'name' => 'Tyre'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'جونية'],
                        ['locale' => 'en', 'name' => 'Jounieh'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'زحلة'],
                        ['locale' => 'en', 'name' => 'Zahle'],
                    ]
                ],
            ],
            'IQ' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'بغداد'],
                        ['locale' => 'en', 'name' => 'Baghdad'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'البصرة'],
                        ['locale' => 'en', 'name' => 'Basra'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الموصل'],
                        ['locale' => 'en', 'name' => 'Mosul'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'أربيل'],
                        ['locale' => 'en', 'name' => 'Erbil'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'النجف'],
                        ['locale' => 'en', 'name' => 'Najaf'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'كربلاء'],
                        ['locale' => 'en', 'name' => 'Karbala'],
                    ]
                ],
            ],
            'SY' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'دمشق'],
                        ['locale' => 'en', 'name' => 'Damascus'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'حلب'],
                        ['locale' => 'en', 'name' => 'Aleppo'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'حمص'],
                        ['locale' => 'en', 'name' => 'Homs'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'حماه'],
                        ['locale' => 'en', 'name' => 'Hama'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'اللاذقية'],
                        ['locale' => 'en', 'name' => 'Latakia'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'دير الزور'],
                        ['locale' => 'en', 'name' => 'Deir ez-Zor'],
                    ]
                ],
            ],
            'PS' => [
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'القدس'],
                        ['locale' => 'en', 'name' => 'Jerusalem'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'غزة'],
                        ['locale' => 'en', 'name' => 'Gaza'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'الخليل'],
                        ['locale' => 'en', 'name' => 'Hebron'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'نابلس'],
                        ['locale' => 'en', 'name' => 'Nablus'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'رام الله'],
                        ['locale' => 'en', 'name' => 'Ramallah'],
                    ]
                ],
                [
                    'translations' => [
                        ['locale' => 'ar', 'name' => 'بيت لحم'],
                        ['locale' => 'en', 'name' => 'Bethlehem'],
                    ]
                ],
            ],
        ];

        // Create cities for each country
        foreach ($countries as $country) {
            if (isset($citiesData[$country->code])) {
                foreach ($citiesData[$country->code] as $cityData) {
                    $city = City::create([
                        'country_id' => $country->id,
                        'is_active' => true,
                    ]);

                    // Create translations for the city
                    foreach ($cityData['translations'] as $translation) {
                        CityTranslation::create([
                            'city_id' => $city->id,
                            'locale' => $translation['locale'],
                            'name' => $translation['name'],
                        ]);
                    }
                }
            }
        }
    }
}
