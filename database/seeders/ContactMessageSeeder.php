<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactMessageSeeder extends Seeder
{
    public function run()
    {
        ContactMessage::create([
            'name' => 'أحمد',
            'email' => 'ahmed@mail.com',
            'phone' => '0551234567',
            'subject' => 'استفسار عن خدمة تنسيق الحدائق',
            'message' => 'السلام عليكم، أود معرفة الأسعار.',
        ]);
    }
}
