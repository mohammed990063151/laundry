<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'name'       => 'شركة بونا للغسيل',
            'logo'       => 'img/logo.png',
            'email'      => 'info@bona.com',
            'phone'      => '+966500000000',
            'address'    => 'الرياض - المملكة العربية السعودية',
            'facebook'   => 'https://facebook.com/bona',
            'twitter'    => 'https://twitter.com/bona',
            'instagram'  => 'https://instagram.com/bona',
            'linkedin'   => 'https://linkedin.com/company/bona',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
