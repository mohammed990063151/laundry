<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyBranch;

class CompanyBranchSeeder extends Seeder
{
    public function run()
    {
        $branches = [
            [
                'name' => 'الفرع الرئيسي - الرياض',
                'address' => 'الرياض - المملكة العربية السعودية',
                'phone' => '0551234567',
                'email' => 'riyadh@modhiaf.com',
                'map_link' => 'https://maps.google.com?q=riyadh'
            ],
            [
                'name' => 'فرع تبوك',
                'address' => 'تبوك - حي الحمراء – طريق نيوم الدولي',
                'phone' => '0146222221',
                'email' => 'tabuk@modhiaf.com',
                'map_link' => 'https://maps.google.com?q=tabuk'
            ],
            [
                'name' => 'فرع الخبر',
                'address' => 'الخبر - طريق الملك فهد',
                'phone' => '0138166665',
                'email' => 'khobar@modhiaf.com',
                'map_link' => 'https://maps.google.com?q=khobar'
            ],
        ];

        foreach ($branches as $branch) {
            CompanyBranch::create($branch);
        }
    }
}
