<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\CountryTranslation;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Countries data
        $countries = [
            [
                'code' => 'SA',
                'currency' => 'SAR',
                'currency_symbol' => '﷼',
                'phone_code' => '+966',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'المملكة العربية السعودية'],
                    ['locale' => 'en', 'name' => 'Saudi Arabia'],
                ]
            ],
            [
                'code' => 'EG',
                'currency' => 'EGP',
                'currency_symbol' => '£',
                'phone_code' => '+20',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'مصر'],
                    ['locale' => 'en', 'name' => 'Egypt'],
                ]
            ],
            [
                'code' => 'AE',
                'currency' => 'AED',
                'currency_symbol' => 'د.إ',
                'phone_code' => '+971',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الإمارات العربية المتحدة'],
                    ['locale' => 'en', 'name' => 'United Arab Emirates'],
                ]
            ],
            [
                'code' => 'KW',
                'currency' => 'KWD',
                'currency_symbol' => 'د.ك',
                'phone_code' => '+965',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الكويت'],
                    ['locale' => 'en', 'name' => 'Kuwait'],
                ]
            ],
            [
                'code' => 'QA',
                'currency' => 'QAR',
                'currency_symbol' => 'ر.ق',
                'phone_code' => '+974',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'قطر'],
                    ['locale' => 'en', 'name' => 'Qatar'],
                ]
            ],
            [
                'code' => 'BH',
                'currency' => 'BHD',
                'currency_symbol' => 'د.ب',
                'phone_code' => '+973',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'البحرين'],
                    ['locale' => 'en', 'name' => 'Bahrain'],
                ]
            ],
            [
                'code' => 'OM',
                'currency' => 'OMR',
                'currency_symbol' => 'ر.ع.',
                'phone_code' => '+968',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'عمان'],
                    ['locale' => 'en', 'name' => 'Oman'],
                ]
            ],
            [
                'code' => 'JO',
                'currency' => 'JOD',
                'currency_symbol' => 'د.أ',
                'phone_code' => '+962',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الأردن'],
                    ['locale' => 'en', 'name' => 'Jordan'],
                ]
            ],
            [
                'code' => 'LB',
                'currency' => 'LBP',
                'currency_symbol' => 'ل.ل',
                'phone_code' => '+961',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'لبنان'],
                    ['locale' => 'en', 'name' => 'Lebanon'],
                ]
            ],
            [
                'code' => 'IQ',
                'currency' => 'IQD',
                'currency_symbol' => 'د.ع',
                'phone_code' => '+964',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'العراق'],
                    ['locale' => 'en', 'name' => 'Iraq'],
                ]
            ],
            [
                'code' => 'SY',
                'currency' => 'SYP',
                'currency_symbol' => 'ل.س',
                'phone_code' => '+963',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'سوريا'],
                    ['locale' => 'en', 'name' => 'Syria'],
                ]
            ],
            [
                'code' => 'PS',
                'currency' => 'ILS',
                'currency_symbol' => '₪',
                'phone_code' => '+970',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'فلسطين'],
                    ['locale' => 'en', 'name' => 'Palestine'],
                ]
            ],
            [
                'code' => 'TN',
                'currency' => 'TND',
                'currency_symbol' => 'د.ت',
                'phone_code' => '+216',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'تونس'],
                    ['locale' => 'en', 'name' => 'Tunisia'],
                ]
            ],
            // Morocco and Algeria entries removed from here as they appear again later
            [
                'code' => 'LY',
                'currency' => 'LYD',
                'currency_symbol' => 'د.ل',
                'phone_code' => '+218',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'ليبيا'],
                    ['locale' => 'en', 'name' => 'Libya'],
                ]
            ],
            [
                'code' => 'SD',
                'currency' => 'SDG',
                'currency_symbol' => 'ج.س.',
                'phone_code' => '+249',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'السودان'],
                    ['locale' => 'en', 'name' => 'Sudan'],
                ]
            ],
            [
                'code' => 'YE',
                'currency' => 'YER',
                'currency_symbol' => 'ر.ي',
                'phone_code' => '+967',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'اليمن'],
                    ['locale' => 'en', 'name' => 'Yemen'],
                ]
            ],
            [
                'code' => 'SO',
                'currency' => 'SOS',
                'currency_symbol' => 'S',
                'phone_code' => '+252',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الصومال'],
                    ['locale' => 'en', 'name' => 'Somalia'],
                ]
            ],
            [
                'code' => 'DJ',
                'currency' => 'DJF',
                'currency_symbol' => 'Fdj',
                'phone_code' => '+253',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'جيبوتي'],
                    ['locale' => 'en', 'name' => 'Djibouti'],
                ]
            ],
            [
                'code' => 'KM',
                'currency' => 'KMF',
                'currency_symbol' => 'CF',
                'phone_code' => '+269',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'جزر القمر'],
                    ['locale' => 'en', 'name' => 'Comoros'],
                ]
            ],
            [
                'code' => 'MR',
                'currency' => 'MRO',
                'currency_symbol' => 'UM',
                'phone_code' => '+222',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'موريتانيا'],
                    ['locale' => 'en', 'name' => 'Mauritania'],
                ]
            ],
            [
                'code' => 'US',
                'currency' => 'USD',
                'currency_symbol' => '$',
                'phone_code' => '+1',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الولايات المتحدة الأمريكية'],
                    ['locale' => 'en', 'name' => 'United States'],
                ]
            ],
            [
                'code' => 'GB',
                'currency' => 'GBP',
                'currency_symbol' => '£',
                'phone_code' => '+44',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'المملكة المتحدة'],
                    ['locale' => 'en', 'name' => 'United Kingdom'],
                ]
            ],
            [
                'code' => 'FR',
                'currency' => 'EUR',
                'currency_symbol' => '€',
                'phone_code' => '+33',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'فرنسا'],
                    ['locale' => 'en', 'name' => 'France'],
                ]
            ],
            [
                'code' => 'DE',
                'currency' => 'EUR',
                'currency_symbol' => '€',
                'phone_code' => '+49',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'ألمانيا'],
                    ['locale' => 'en', 'name' => 'Germany'],
                ]
            ],
            [
                'code' => 'IT',
                'currency' => 'EUR',
                'currency_symbol' => '€',
                'phone_code' => '+39',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'إيطاليا'],
                    ['locale' => 'en', 'name' => 'Italy'],
                ]
            ],
            [
                'code' => 'ES',
                'currency' => 'EUR',
                'currency_symbol' => '€',
                'phone_code' => '+34',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'إسبانيا'],
                    ['locale' => 'en', 'name' => 'Spain'],
                ]
            ],
            [
                'code' => 'CA',
                'currency' => 'CAD',
                'currency_symbol' => '$',
                'phone_code' => '+1',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'كندا'],
                    ['locale' => 'en', 'name' => 'Canada'],
                ]
            ],
            [
                'code' => 'AU',
                'currency' => 'AUD',
                'currency_symbol' => '$',
                'phone_code' => '+61',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'أستراليا'],
                    ['locale' => 'en', 'name' => 'Australia'],
                ]
            ],
            [
                'code' => 'JP',
                'currency' => 'JPY',
                'currency_symbol' => '¥',
                'phone_code' => '+81',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'اليابان'],
                    ['locale' => 'en', 'name' => 'Japan'],
                ]
            ],
            [
                'code' => 'CN',
                'currency' => 'CNY',
                'currency_symbol' => '¥',
                'phone_code' => '+86',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الصين'],
                    ['locale' => 'en', 'name' => 'China'],
                ]
            ],
            [
                'code' => 'IN',
                'currency' => 'INR',
                'currency_symbol' => '₹',
                'phone_code' => '+91',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الهند'],
                    ['locale' => 'en', 'name' => 'India'],
                ]
            ],
            [
                'code' => 'RU',
                'currency' => 'RUB',
                'currency_symbol' => '₽',
                'phone_code' => '+7',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'روسيا'],
                    ['locale' => 'en', 'name' => 'Russia'],
                ]
            ],
            [
                'code' => 'BR',
                'currency' => 'BRL',
                'currency_symbol' => 'R$',
                'phone_code' => '+55',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'البرازيل'],
                    ['locale' => 'en', 'name' => 'Brazil'],
                ]
            ],
            [
                'code' => 'MX',
                'currency' => 'MXN',
                'currency_symbol' => '$',
                'phone_code' => '+52',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'المكسيك'],
                    ['locale' => 'en', 'name' => 'Mexico'],
                ]
            ],
            [
                'code' => 'AR',
                'currency' => 'ARS',
                'currency_symbol' => '$',
                'phone_code' => '+54',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الأرجنتين'],
                    ['locale' => 'en', 'name' => 'Argentina'],
                ]
            ],
            [
                'code' => 'TR',
                'currency' => 'TRY',
                'currency_symbol' => '₺',
                'phone_code' => '+90',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'تركيا'],
                    ['locale' => 'en', 'name' => 'Turkey'],
                ]
            ],
            [
                'code' => 'IR',
                'currency' => 'IRR',
                'currency_symbol' => '﷼',
                'phone_code' => '+98',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'إيران'],
                    ['locale' => 'en', 'name' => 'Iran'],
                ]
            ],
            [
                'code' => 'PK',
                'currency' => 'PKR',
                'currency_symbol' => '₨',
                'phone_code' => '+92',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'باكستان'],
                    ['locale' => 'en', 'name' => 'Pakistan'],
                ]
            ],
            [
                'code' => 'ID',
                'currency' => 'IDR',
                'currency_symbol' => 'Rp',
                'phone_code' => '+62',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'إندونيسيا'],
                    ['locale' => 'en', 'name' => 'Indonesia'],
                ]
            ],
            [
                'code' => 'MY',
                'currency' => 'MYR',
                'currency_symbol' => 'RM',
                'phone_code' => '+60',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'ماليزيا'],
                    ['locale' => 'en', 'name' => 'Malaysia'],
                ]
            ],
            [
                'code' => 'TH',
                'currency' => 'THB',
                'currency_symbol' => '฿',
                'phone_code' => '+66',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'تايلاند'],
                    ['locale' => 'en', 'name' => 'Thailand'],
                ]
            ],
            [
                'code' => 'PH',
                'currency' => 'PHP',
                'currency_symbol' => '₱',
                'phone_code' => '+63',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الفلبين'],
                    ['locale' => 'en', 'name' => 'Philippines'],
                ]
            ],
            [
                'code' => 'VN',
                'currency' => 'VND',
                'currency_symbol' => '₫',
                'phone_code' => '+84',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'فيتنام'],
                    ['locale' => 'en', 'name' => 'Vietnam'],
                ]
            ],
            [
                'code' => 'SG',
                'currency' => 'SGD',
                'currency_symbol' => '$',
                'phone_code' => '+65',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'سنغافورة'],
                    ['locale' => 'en', 'name' => 'Singapore'],
                ]
            ],
            [
                'code' => 'KR',
                'currency' => 'KRW',
                'currency_symbol' => '₩',
                'phone_code' => '+82',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'كوريا الجنوبية'],
                    ['locale' => 'en', 'name' => 'South Korea'],
                ]
            ],
            [
                'code' => 'ZA',
                'currency' => 'ZAR',
                'currency_symbol' => 'R',
                'phone_code' => '+27',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'جنوب أفريقيا'],
                    ['locale' => 'en', 'name' => 'South Africa'],
                ]
            ],
            [
                'code' => 'NG',
                'currency' => 'NGN',
                'currency_symbol' => '₦',
                'phone_code' => '+234',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'نيجيريا'],
                    ['locale' => 'en', 'name' => 'Nigeria'],
                ]
            ],
            [
                'code' => 'KE',
                'currency' => 'KES',
                'currency_symbol' => 'KSh',
                'phone_code' => '+254',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'كينيا'],
                    ['locale' => 'en', 'name' => 'Kenya'],
                ]
            ],
            [
                'code' => 'MA',
                'currency' => 'MAD',
                'currency_symbol' => 'د.م.',
                'phone_code' => '+212',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'المغرب'],
                    ['locale' => 'en', 'name' => 'Morocco'],
                ]
            ],
            [
                'code' => 'DZ',
                'currency' => 'DZD',
                'currency_symbol' => 'د.ج',
                'phone_code' => '+213',
                'is_active' => true,
                'translations' => [
                    ['locale' => 'ar', 'name' => 'الجزائر'],
                    ['locale' => 'en', 'name' => 'Algeria'],
                ]
]
        ];

        foreach ($countries as $countryData) {
            $translations = $countryData['translations'];
            unset($countryData['translations']);

            $country = Country::create($countryData);

            foreach ($translations as $translation) {
                CountryTranslation::create([
                    'country_id' => $country->id,
                    'locale' => $translation['locale'],
                    'name' => $translation['name']
                ]);
            }
        }
    }
}
