<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ModyafService;

class ModyafServiceSeeder extends Seeder
{
    public function run()
    {
        ModyafService::insert([
            [
                'title'=>'مشتل مضياف الزراعي',
                'slug'=>'nursery',
                'phone'=>'0501234567',
                'email'=>'nursery@modyaf.sa',
                'address'=>'حريملاء - الرياض',
                'image'=>'uploads/modyaf/1.webp',
                'description'=>'مشتل يوفر أشجار وزهور ونباتات داخلية وخارجية.'
            ],
            [
                'title'=>'قسم تنسيق الحدائق',
                'slug'=>'landscape',
                'phone'=>'0559876543',
                'email'=>'landscape@modyaf.sa',
                'address'=>'الرياض - الرمال',
                'image'=>'uploads/modyaf/2.webp',
                'description'=>'تصميم وصيانة حدائق للفلل والاستراحات.'
            ],
        ]);
    }
}

