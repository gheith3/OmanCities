<?php

namespace Gheith3\OmanCities\Commands;

use Gheith3\OmanCities\Models\OmanCity;
use Gheith3\OmanCities\Models\OmanGovernorate;
use Illuminate\Console\Command;

class OmanCitiesCommand extends Command
{
    public $signature = 'omancities:seed';

    public $description = 'seed all cities to the data base';

    protected function cities(): array
    {
        return [
            [
                "name" => ["ar" => "مسقط", "en" => "Muscat"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "muscat",
                "cities" => [
                    [
                        "name" => ["ar" => "مسقط", "en" => "Muscat"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "muscat",
                    ],
                    [
                        "name" => ["ar" => "مطرح", "en" => "Mutrah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "mutrah",
                    ],
                    [
                        "name" => ["ar" => "بوشر", "en" => "Bawshar"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "bawshar",
                    ],
                    [
                        "name" => ["ar" => "السيب", "en" => "Al Seeb"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-seeb",
                    ],
                    [
                        "name" => ["ar" => "قريات", "en" => "Quriyat"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "quriyat",
                    ],
                    [
                        "name" => ["ar" => "العامرات", "en" => "Al Amrat"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-amrat",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "ظفار", "en" => "Dhofar"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "dhofar",
                "cities" => [
                    [
                        "name" => ["ar" => "صلالة", "en" => "Salalah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "salalah",
                    ],
                    [
                        "name" => ["ar" => "طاقة", "en" => "Taqah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "taqah",
                    ],
                    [
                        "name" => ["ar" => "مرباط", "en" => "Mirbat"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "mirbat",
                    ],
                    [
                        "name" => ["ar" => "سدح", "en" => "Sadah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "sadah",
                    ],
                    [
                        "name" => ["ar" => "شليم وجزر الحلانيات", "en" => "Shalim and the Hallaniyat Islands"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "shalim-and-the-hallaniyat-islands",
                    ],
                    [
                        "name" => ["ar" => "ضلكوت", "en" => "Dalkoot"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "dalkoot",
                    ],
                    [
                        "name" => ["ar" => "ريسوت", "en" => "Rasyut"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "rasyut",
                    ],
                    [
                        "name" => ["ar" => "ثمريت", "en" => "Thumarait"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "thumarait",
                    ],
                    [
                        "name" => ["ar" => "مقشن", "en" => "Mokshin"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "mokshin",
                    ],
                    [
                        "name" => ["ar" => "المزيونة", "en" => "Al Mazuna"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-mazuna",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "مسندم", "en" => "Musandam"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "musandam",
                "cities" => [
                    [
                        "name" => ["ar" => "خصب", "en" => "Khasab"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "khasab",
                    ],
                    [
                        "name" => ["ar" => "بخا", "en" => "Bukha"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "bukha",
                    ],
                    [
                        "name" => ["ar" => "دبا", "en" => "Diba"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "diba",
                    ],
                    [
                        "name" => ["ar" => "مدحا", "en" => "Madha"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "madha",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "الشرقية جنوب", "en" => "Ash Sharqiyah South"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "ash-sharqiyah-south",
                "cities" => [
                    [
                        "name" => ["ar" => "صور", "en" => "Sur"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "sur",
                    ],
                    [
                        "name" => ["ar" => "الكامل والوافي", "en" => "Al Kamil & Al Wafi"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-kamil-al-wafi",
                    ],
                    [
                        "name" => ["ar" => "جعلان بني بو علي", "en" => "Jalan Bani Bu Ali"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "jalan-bani-bu-ali",
                    ],
                    [
                        "name" => ["ar" => "جعلان بني بو حسن", "en" => "Jalan Bani Bu Hassan"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "jalan-bani-bu-hassan",
                    ],
                    [
                        "name" => ["ar" => "مصيرة", "en" => "Masirah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "masirah",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "الشرقية شمال", "en" => "Ash Sharqiyah North"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "ash-sharqiyah-north",
                "cities" => [
                    [
                        "name" => ["ar" => "إبرأ", "en" => "Ibra"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "ibra",
                    ],
                    [
                        "name" => ["ar" => "القابل", "en" => "Al Qabil"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-qabil",
                    ],
                    [
                        "name" => ["ar" => "المضيبي", "en" => "Al Mudhaibi"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-mudhaibi",
                    ],
                    [
                        "name" => ["ar" => "دماء والطائين", "en" => "Dimatayin"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "dimatayin",
                    ],
                    [
                        "name" => ["ar" => "وادي بني خالد", "en" => "Wadi Bani Khalid"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "wadi-bani-khalid",
                    ],
                    [
                        "name" => ["ar" => "بدية", "en" => "Bidiyah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "bidiyah",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "الباطنة شمال", "en" => "Al Batinah North"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "al-batinah-north",
                "cities" => [
                    [
                        "name" => ["ar" => "صحار", "en" => "Sohar"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "sohar",
                    ],
                    [
                        "name" => ["ar" => "السويق", "en" => "Al Suwaiq"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-suwaiq",
                    ],
                    [
                        "name" => ["ar" => "الخابورة", "en" => "Al Khaburah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-khaburah",
                    ],
                    [
                        "name" => ["ar" => "صحم", "en" => "Saham"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "saham",
                    ],
                    [
                        "name" => ["ar" => "لوى", "en" => "Liwa"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "liwa",
                    ],
                    [
                        "name" => ["ar" => "شناص", "en" => "Shinas"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "shinas",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "الباطنة شمال", "en" => "Al Batinah South"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "al-batinah-south",
                "cities" => [
                    [
                        "name" => ["ar" => "المصنعة", "en" => "Al Musannah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-musannah",
                    ],
                    [
                        "name" => ["ar" => "بركاء", "en" => "Barka"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "barka",
                    ],
                    [
                        "name" => ["ar" => "وادي المعاول", "en" => "Wadi Al Mawil"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "wadi-al-mawil",
                    ],
                    [
                        "name" => ["ar" => "العوابي", "en" => "Al Awabi"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-awabi",
                    ],
                    [
                        "name" => ["ar" => "الرستاق", "en" => "Al Rustaq"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-rustaq",
                    ],
                    [
                        "name" => ["ar" => "نخل", "en" => "Nakhal"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "nakhal",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "الداخلية", "en" => "Ad Dakhiliyah"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "ad-dakhiliyah",
                "cities" => [
                    [
                        "name" => ["ar" => "نزوى", "en" => "Nizwa"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "nizwa",
                    ],
                    [
                        "name" => ["ar" => "إزكي", "en" => "Izki"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "izki",
                    ],
                    [
                        "name" => ["ar" => "سمائل", "en" => "Samail"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "samail",
                    ],
                    [
                        "name" => ["ar" => "بهلاء", "en" => "Bahla"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "bahla",
                    ],
                    [
                        "name" => ["ar" => "أدم", "en" => "Adam"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "adam",
                    ],
                    [
                        "name" => ["ar" => "الحمراء", "en" => "Al Hamra"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-hamra",
                    ],
                    [
                        "name" => ["ar" => "منح", "en" => "Manah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "manah",
                    ],
                    [
                        "name" => ["ar" => "بدبد", "en" => "Bidbid"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "bidbid",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "الظاهرة", "en" => "Ad Dhahirah"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "ad-dhahirah",
                "cities" => [
                    [
                        "name" => ["ar" => "عبري", "en" => "Ibri"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "ibri",
                    ],
                    [
                        "name" => ["ar" => "ينقل", "en" => "Yanqul"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "yanqul",
                    ],
                    [
                        "name" => ["ar" => "ضنك", "en" => "Dhank"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "dhank",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "البريمي", "en" => "Al Buraimi"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "al-buraimi",
                "cities" => [
                    [
                        "name" => ["ar" => "البريمي", "en" => "Al Buraimi"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-buraimi",
                    ],
                    [
                        "name" => ["ar" => "محضة", "en" => "Mahdah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "mahdah",
                    ],
                    [
                        "name" => ["ar" => "السنينة", "en" => "Al Sinaynah"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-sinaynah",
                    ],
                ],
            ]
            , [
                "name" => ["ar" => "الوسطى", "en" => "Al Wusta"],
                "latitude" => "",
                "longitude" => "",
                "short_name" => "al-wusta",
                "cities" => [
                    [
                        "name" => ["ar" => "هيما", "en" => "Haima"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "haima",
                    ],
                    [
                        "name" => ["ar" => "محوت", "en" => "Mahut"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "mahut",
                    ],
                    [
                        "name" => ["ar" => "الدقم", "en" => "Al Duqum"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-duqum",
                    ],
                    [
                        "name" => ["ar" => "الجازر", "en" => "Al Jasir"],
                        "latitude" => "",
                        "longitude" => "",
                        "short_name" => "al-jasir",
                    ],
                ],
            ]
            ,
        ];
    }

    public function seed()
    {
        $created_at = now();
        foreach ($this->cities() as $city) {
            $gov = OmanGovernorate::updateOrCreate(
                [
                    "short_name" => $city['short_name'],
                ],
                [
                    "short_name" => $city['short_name'],
                    "name" => [
                        "ar" => $city['name']['ar'],
                        "en" => $city['name']['en'],
                    ],
                    "latitude" => $city['latitude'],
                    "longitude" => $city['longitude'],
                    "created_at" => $created_at,
                    "updated_at" => $created_at,
                ]
            );

            foreach ($city['cities'] as $wilayat) {
                OmanCity::updateOrCreate(
                    [
                        "short_name" => $wilayat['short_name'],
                        "governorate_id" => $gov->id,
                    ],
                    [
                        "short_name" => $wilayat['short_name'],
                        "governorate_id" => $gov->id,
                        "name" => [
                            "ar" => $wilayat['name']['ar'],
                            "en" => $wilayat['name']['en'],
                        ],
                        "latitude" => $wilayat['latitude'],
                        "longitude" => $wilayat['longitude'],
                        "created_at" => $created_at,
                        "updated_at" => $created_at,
                    ]
                );
            }
        }
    }

    public function handle(): int
    {
        $this->seed();
        $this->comment('All done');

        return self::SUCCESS;
    }
}
