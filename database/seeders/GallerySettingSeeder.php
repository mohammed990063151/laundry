<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GallerySetting;

class GallerySettingSeeder extends Seeder
{
    public function run()
    {
        GallerySetting::create([
            'title'       => 'معرض أعمال شركة مضياف',
            'description' => 'مجموعة من الصور التي توضح خدماتنا ومشاريعنا الزراعية في جميع أنحاء المملكة.'
        ]);
    }
}
