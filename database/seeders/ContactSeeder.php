<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactSetting;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactSetting::create([
    'title'=>'تواصل معنا الآن',
    'subtitle'=>'نسعد بخدمتكم في جميع فروع مضياف',
    'email'=>'info@modhiaf.com',
    'phone'=>'966500000000',
    'whatsapp'=>'966500000000',
    'address'=>'الرياض، المملكة العربية السعودية',
    'map_embed'=>'<iframe>...</iframe>',
]);

    }
}
