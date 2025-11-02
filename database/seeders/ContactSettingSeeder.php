<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactSetting;

class ContactSettingSeeder extends Seeder
{
    public function run()
    {
        ContactSetting::updateOrCreate(['id' => 1], [
            'title' => 'تواصل معنا',
            'subtitle' => 'سعداء بخدمتك دائماً في شركة مُضياف',
            'email' => 'info@modhiaf.com',
            'phone' => '0555000000',
            'whatsapp' => '0555000000',
            'address' => 'السعودية - الرياض - حريملاء',
            'map_embed' => '<iframe src="https://maps.google.com"></iframe>'
        ]);
    }
}
