<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GalleryItem;

class GalleryItemSeeder extends Seeder
{
    public function run()
    {
        GalleryItem::insert([
            [
                'caption' => 'تنسيق حدائق احترافية',
                'image'   => 'dashboard_files/img/gallery/sample1.jpg'
            ],
            [
                'caption' => 'خدمة مكافحة آفات',
                'image'   => 'dashboard_files/img/gallery/sample2.jpg'
            ],
            [
                'caption' => 'مضخات وغطاسات آبار',
                'image'   => 'dashboard_files/img/gallery/sample3.jpg'
            ],
            [
                'caption' => 'مشاتل أشجار وزهور',
                'image'   => 'dashboard_files/img/gallery/sample4.jpg'
            ],
        ]);
    }
}
