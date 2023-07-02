<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name_arabic' => 'المملكة العربية السعودية', 'name_english' => 'Saudi Arabia'],
            ['name_arabic' => 'مصر', 'name_english' => 'Egypt'],
            ['name_arabic' => 'الجزائر', 'name_english' => 'Algeria'],
            // Add more countries here
            ['name_arabic' => 'الإمارات العربية المتحدة', 'name_english' => 'United Arab Emirates'],
            ['name_arabic' => 'البحرين', 'name_english' => 'Bahrain'],
            ['name_arabic' => 'تونس', 'name_english' => 'Tunisia'],
            ['name_arabic' => 'العراق', 'name_english' => 'Iraq'],
            ['name_arabic' => 'لبنان', 'name_english' => 'Lebanon'],
            ['name_arabic' => 'الكويت', 'name_english' => 'Kuwait'],
            ['name_arabic' => 'الأردن', 'name_english' => 'Jordan'],
            ['name_arabic' => 'سوريا', 'name_english' => 'Syria'],
            ['name_arabic' => 'قطر', 'name_english' => 'Qatar'],
            ['name_arabic' => 'عمان', 'name_english' => 'Oman'],
            ['name_arabic' => 'اليمن', 'name_english' => 'Yemen'],
            ['name_arabic' => 'المغرب', 'name_english' => 'Morocco'],
            ['name_arabic' => 'السودان', 'name_english' => 'Sudan'],
            ['name_arabic' => 'ليبيا', 'name_english' => 'Libya'],
            ['name_arabic' => 'موريتانيا', 'name_english' => 'Mauritania'],
            ['name_arabic' => 'الصومال', 'name_english' => 'Somalia'],
            ['name_arabic' => 'جيبوتي', 'name_english' => 'Djibouti'],
            ['name_arabic' => 'فلسطين', 'name_english' => 'Palestine'],
            ['name_arabic' => 'الجمهورية اليمنية', 'name_english' => 'Republic of Yemen'],
            ['name_arabic' => 'العربية السورية', 'name_english' => 'Syrian Arab Republic'],
            ['name_arabic' => 'جمهورية مصر العربية', 'name_english' => 'Arab Republic of Egypt'],
            ['name_arabic' => 'المملكة المغربية', 'name_english' => 'Kingdom of Morocco'],
            ['name_arabic' => 'الجمهورية اللبنانية', 'name_english' => 'Lebanese Republic'],
            ['name_arabic' => 'الجمهورية العراقية', 'name_english' => 'Republic of Iraq'],
            ['name_arabic' => 'الجمهورية الجزائرية الديمقراطية الشعبية', 'name_english' => 'People\'s Democratic Republic of Algeria'],
            ['name_arabic' => 'الجمهورية التونسية', 'name_english' => 'Republic of Tunisia'],
            ['name_arabic' => 'المملكة الأردنية الهاشمية', 'name_english' => 'Hashemite Kingdom of Jordan'],
            ['name_arabic' => 'دولة الكويت', 'name_english' => 'State of Kuwait'],
            ['name_arabic' => 'سلطنة عمان', 'name_english' => 'Sultanate of Oman'],
            ['name_arabic' => 'دولة قطر', 'name_english' => 'State of Qatar'],
            ['name_arabic' => 'المملكة البحرينية', 'name_english' => 'Kingdom of Bahrain'],
            ['name_arabic' => 'ليبيا', 'name_english' => 'Libya'],
            ['name_arabic' => 'جمهورية السودان', 'name_english' => 'Republic of Sudan'],
            ['name_arabic' => 'المملكة المغربية', 'name_english' => 'Kingdom of Morocco'],
            ['name_arabic' => 'جمهورية مصر العربية', 'name_english' => 'Arab Republic of Egypt'],
            ['name_arabic' => 'جمهورية الصومال الفدرالية', 'name_english' => 'Federal Republic of Somalia'],
            ['name_arabic' => 'جمهورية موريتانيا', 'name_english' => 'Islamic Republic of Mauritania'],
            ['name_arabic' => 'جمهورية جيبوتي', 'name_english' => 'Republic of Djibouti'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
