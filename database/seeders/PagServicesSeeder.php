<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pagservice;

class PagServicesSeeder extends Seeder
{
    public function run()
    {
        $services = [
            ['title'=>'مشاتل وأشجار','slug'=>'nursery-trees','icon'=>'fa fa-leaf','description'=>'توفير أشجار وزهور عالية الجودة','sort_order'=>1],
            ['title'=>'بذور متنوعة','slug'=>'seeds','icon'=>'fa fa-seedling','description'=>'بذور زهور وخضار ونباتات برية','sort_order'=>2],
            ['title'=>'مضخات غطاسات','slug'=>'pumps','icon'=>'fa fa-tint','description'=>'حلول الري وتشغيل مضخات الآبار','sort_order'=>3],
            ['title'=>'مكافحة آفات','slug'=>'pest-control','icon'=>'fa fa-bug','description'=>'مكافحة آفات الصحة العامة والزراعية','sort_order'=>4],
            ['title'=>'تنسيق حدائق','slug'=>'landscape','icon'=>'fa fa-tree','description'=>'تصميم وتنفيذ حدائق مبهرة','sort_order'=>5],
            ['title'=>'مستلزمات زراعية','slug'=>'supplies','icon'=>'fa fa-shopping-bag','description'=>'أسمدة وأدوات ومغذيات زراعية','sort_order'=>6],
        ];

        Pagservice::insert($services);
    }
}
