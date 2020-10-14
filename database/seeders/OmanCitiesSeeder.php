<?php

namespace Database\Seeders;

use App\Models\OmanGovernorate;
use App\Models\OmanWilayat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OmanCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return array[]
     */

    protected function cities()
    {
        return [
            [
                "name" => [
                    "ar" => "مسقط",
                    "en" => "Muscat"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "مسقط",
                            "en" => "Muscat"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "مطرح",
                            "en" => "Mutrah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "بوشر",
                            "en" => "Bawshar"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "السيب",
                            "en" => "Al Seeb"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "قريات",
                            "en" => "Quriyat "
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "العامرات",
                            "en" => "Al Amrat"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "ظفار",
                    "en" => "Dhofar"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "صلالة",
                            "en" => "Salalah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "طاقة",
                            "en" => "Taqah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "مرباط",
                            "en" => "Mirbat"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "سدح",
                            "en" => "Sadah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "شليم وجزر الحلانيات",
                            "en" => "Shalim and the Hallaniyat Islands"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "ضلكوت",
                            "en" => "Dalkoot"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "ريسوت",
                            "en" => "Rasyut"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "ثمريت",
                            "en" => "Thumarait"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "مقشن",
                            "en" => "Mokshin"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "المزيونة",
                            "en" => "Al Mazuna"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "مسندم",
                    "en" => "Musandam"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "خصب",
                            "en" => "Khasab"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "بخا",
                            "en" => "Bukha"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "دبا",
                            "en" => "Diba"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "مدحا",
                            "en" => "Madha"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "الشرقية جنوب",
                    "en" => "Ash Sharqiyah South"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "صور",
                            "en" => "Sur"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "الكامل والوافي",
                            "en" => "Al Kamil & Al Wafi"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "جعلان بني بو علي",
                            "en" => "Jalan Bani Bu Ali"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "جعلان بني بو حسن",
                            "en" => "Jalan Bani Bu Hassan"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "مصيرة",
                            "en" => "Masirah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "الشرقية شمال",
                    "en" => "Ash Sharqiyah North"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "إبرأ",
                            "en" => "Ibra"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "القابل",
                            "en" => "Al Qabil"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "المضيبي",
                            "en" => "Al Mudhaibi"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "دماء والطائين",
                            "en" => "Dimatayin"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "وادي بني خالد",
                            "en" => "Wadi Bani Khalid"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "بدية",
                            "en" => "Bidiyah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "الباطنة شمال",
                    "en" => "Al Batinah North"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "صحار",
                            "en" => "Sohar"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "السويق",
                            "en" => "Al Suwaiq"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "الخابورة",
                            "en" => "Al Khaburah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "صحم",
                            "en" => "Saham"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "لوى",
                            "en" => "Liwa"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "شناص",
                            "en" => "Shinas"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "الباطنة شمال",
                    "en" => "Al Batinah South"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "المصنعة",
                            "en" => "Al Musannah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "بركاء",
                            "en" => "Barka"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "وادي المعاول",
                            "en" => "Wadi Al Mawil"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "العوابي",
                            "en" => "Al Awabi"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "الرستاق",
                            "en" => "Al Rustaq"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "نخل",
                            "en" => "Nakhal"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "الداخلية",
                    "en" => "Ad Dakhiliyah"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "نزوى",
                            "en" => "Nizwa"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "إزكي",
                            "en" => "Izki"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "سمائل",
                            "en" => "Samail"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "بهلاء",
                            "en" => "Bahla"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "أدم",
                            "en" => "Adam"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "الحمراء",
                            "en" => "Al Hamra"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "منح",
                            "en" => "Manah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "بدبد",
                            "en" => "Bidbid"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "الظاهرة",
                    "en" => "Ad Dhahirah"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "عبري",
                            "en" => "Ibri"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "ينقل",
                            "en" => "Yanqul"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "ضنك",
                            "en" => "Dhank"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "البريمي",
                    "en" => "Al Buraimi"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "البريمي",
                            "en" => "Al Buraimi"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "محضة",
                            "en" => "Mahdah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "السنينة",
                            "en" => "Al Sinaynah"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ],
            [
                "name" => [
                    "ar" => "الوسطى",
                    "en" => "Al Wusta"
                ],
                "latitude" => "",
                "longitude" => "",
                "wilayats" => [
                    [
                        "name" => [
                            "ar" => "هيما",
                            "en" => "Haima"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "محوت",
                            "en" => "Mahut"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "الدقم",
                            "en" => "Al Duqum"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ],
                    [
                        "name" => [
                            "ar" => "الجازر",
                            "en" => "Al Jasir"
                        ],
                        "latitude" => "",
                        "longitude" => ""
                    ]
                ]
            ]
        ];
    }


    public function run()
    {
        foreach ($this->cities() as $city){
            $gov = OmanGovernorate::create([
                "name" => [
                    "ar" => $city['name']['ar'],
                    "en" => $city['name']['en']
                ],
                "latitude" => $city['latitude'],
                "longitude" => $city['longitude'],
            ]);
            foreach ($city['wilayats'] as $wilayat){
                OmanWilayat::create([
                    "governorate_id" => $gov->id,
                    "name" => [
                        "ar" => $wilayat['name']['ar'],
                        "en" => $wilayat['name']['en']
                    ],
                    "latitude" => $wilayat['latitude'],
                    "longitude" => $wilayat['longitude'],
                ]);
            }
        }
    }
}
