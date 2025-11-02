<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'تصميم وتنفيذ حديقة خاصة في الرياض',
                'description' => 'مشروع متكامل لتصميم وتنفيذ حديقة منزلية باستخدام تقنيات الري الذكي وتنسيق النخيل والورود.',
                'image' => 'dashboard_files/img/projects/riyadh_garden.jpg',
                'location' => 'الرياض',
                'completion_date' => '2024-05-15',
            ],
            [
                'title' => 'إنشاء جدار أخضر (Green Wall) في جدة',
                'description' => 'تنفيذ جدار نباتي رأسي بتقنيات التهوية الحديثة وزراعة نباتات داخلية مقاومة للحرارة.',
                'image' => 'dashboard_files/img/projects/jeddah_greenwall.jpg',
                'location' => 'جدة',
                'completion_date' => '2024-02-10',
            ],
            [
                'title' => 'تصميم مجلس خشبي في منتجع خاص',
                'description' => 'إنشاء برجولة خشبية فاخرة ومجلس خارجي متكامل الإضاءة مع النباتات المحيطة.',
                'image' => 'dashboard_files/img/projects/resort_majlis.jpg',
                'location' => 'الخبر',
                'completion_date' => '2023-11-22',
            ],
        ];

        foreach ($projects as $item) {
            Project::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title'], '-'),
                'description' => $item['description'],
                'image' => $item['image'],
                'location' => $item['location'],
                'completion_date' => $item['completion_date'],
            ]);
        }
    }
}
