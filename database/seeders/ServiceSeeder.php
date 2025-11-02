<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'title' => 'خدمات شركة مضياف الزراعية',
             'description' => 'نقدم مجموعة شاملة من الخدمات الزراعية لتلبية احتياجات عملائنا، بما في ذلك توفير المشاتل، البذور، المضخات، مكافحة الآفات، تنسيق الحدائق، والمستلزمات الزراعية.',
            'caption1' => 'مشاتل وأشجار',
            'caption2' => 'بذور متنوعة',
            'caption3' => 'مضخات وغطاسات',
            'caption4' => 'مكافحة آفات',
            'caption5' => 'تنسيق حدائق',
            'caption6' => 'مستلزمات زراعية',
        ]);
    }
}


