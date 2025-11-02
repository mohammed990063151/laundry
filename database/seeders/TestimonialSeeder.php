<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;
class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Testimonial::insert([
    ['name'=>'أبو خالد','stars'=>5,'review'=>'خدمتهم ممتازة جداً! نتائج مكافحة الآفات ظهرت في أيام فقط 👌'],
    ['name'=>'أحمد','stars'=>4,'review'=>'تعامل راقي وشغل احترافي في تنسيق الحدائق 🌿'],
]);

    }
}
