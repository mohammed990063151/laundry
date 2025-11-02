<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'title'       => 'من نحن في شركة مضياف؟',
            'description' => 'شركة مضياف للزراعة والخدمات البيئية مقرها حريملاء، نعمل على دعم المزارع...',
            'image1'      => 'dashboard_files/img/logos/11.jpg',
            'image2'      => 'dashboard_files/img/logos/12.jpg',
            'point1'      => '🌱 مشاتل متنوعة للأشجار والزهور',
            'point2'      => '🪴 بذور زهور وخضار ونباتات برية',
            'point3'      => '🚿 مضخات وغطاسات للآبار الزراعية والمنزلية',
            'point4'      => '🐞 مكافحة آفات الصحة العامة والآفات الزراعية'
        ]);
    }
}


