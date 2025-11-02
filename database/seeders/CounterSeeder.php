<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Counter;

class CounterSeeder extends Seeder
{
    public function run()
    {
        Counter::create([
            'title1' => 'مشروع تم تنفيذه',
            'count1' => 150,
            'title2' => 'مزارع تم دعمهم',
            'count2' => 300,
            'title3' => 'شجرة تم زراعتها',
            'count3' => 5000,
            'title4' => 'مضخة تم تشغيلها',
            'count4' => 120,
        ]);
    }
}

