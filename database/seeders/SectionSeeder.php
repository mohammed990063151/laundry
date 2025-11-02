<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    public function run()
    {
        Section::updateOrCreate(
            ['id' => 1], // نستخدم id=1 لضمان صفحة واحدة فقط
            [
                'title' => 'خدمات الحدائق والزراعة',
                'description' => 'نحن نقدم حلول احترافية للمناظر الطبيعية وصيانة الحدائق.',
                'button_text' => 'استكشف خدماتنا',
                'clients_count' => 10000,
                'image' => 'dashboard_files/img/logos/1761232305.jpg',
            ]
        );
    }
}
