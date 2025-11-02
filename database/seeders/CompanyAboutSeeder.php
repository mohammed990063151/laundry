<?php
// database/seeders/CompanyAboutSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyAbout;

class CompanyAboutSeeder extends Seeder
{
    public function run(): void
    {
        CompanyAbout::create([
            'title'    => 'شركة مضياف الزراعية',
            'subtitle' => 'حلول زراعية متكاملة وفق أعلى المعايير',
            'intro'    => 'شركة مضياف هي شركة سعودية متخصصة في الخدمات الزراعية والبيئية، تقدم حلول المشاتل وتنسيق الحدائق ومكافحة الآفات وتشغيل المضخات والغطاسات، بما يواكب تطلعات رؤية المملكة 2030.',
            'point1'   => 'خبرة هندسية متخصصة',
            'point2'   => 'منتجات عالية الجودة',
            'point3'   => 'خدمة عملاء على مدار الساعة',
            'point4'   => 'توصيل سريع ودعم فني',
            // صورة الهيدر ضعها يدويًا لاحقًا من الداشبورد
        ]);
    }
}

