<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WhyUs;

class WhyUsSeeder extends Seeder
{
    public function run()
    {
        WhyUs::create([
            'title' => 'لماذا نحن؟',
            'description' => '٤ نقاط إقناع تساعد في بناء الثقة فوراً',
            'image1'      => 'dashboard_files/img/logos/11.jpg',
            'image2'      => 'dashboard_files/img/logos/12.jpg',
            'image3'      => 'dashboard_files/img/logos/11.jpg',
            'image4'      => 'dashboard_files/img/logos/12.jpg',
        ]);
    }
}

