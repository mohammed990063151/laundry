<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Pagservice;
use App\Models\ServiceImage;
use App\Models\ServiceFeature;

class PagserviceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'تصميمات 2D & 3D',
                'icon' => 'fa-solid fa-drafting-compass',
                'description' => 'تصميمات هندسية وزراعية ثلاثية وثنائية الأبعاد لإظهار المشروع قبل التنفيذ.',
            ],
            [
                'title' => 'زراعة النخيل والأشجار والورود',
                'icon' => 'fa-solid fa-tree',
                'description' => 'توفير وتنفيذ زراعة النخيل والأشجار والزهور بجودة عالية ومتابعة الصيانة الدورية.',
            ],
            [
                'title' => 'صيانة وتنسيق الحدائق',
                'icon' => 'fa-solid fa-seedling',
                'description' => 'خدمات العناية بالحدائق وتنظيفها وتشذيب الأشجار وتنسيق المساحات الخضراء.',
            ],
            [
                'title' => 'إنشاء وصيانة شبكات الري الذكي',
                'icon' => 'fa-solid fa-droplet',
                'description' => 'أنظمة ري أوتوماتيكية متطورة لتوفير المياه وضمان ري متوازن وذكي للنباتات.',
            ],
            [
                'title' => 'المجالس والبرجولات الخشبية',
                'icon' => 'fa-solid fa-warehouse',
                'description' => 'تصميم وتنفيذ مجالس خارجية وبرجولات خشبية وحديدية بجودة عالية ولمسة فنية.',
            ],
            [
                'title' => 'Green Wall',
                'icon' => 'fa-solid fa-border-all',
                'description' => 'تصميم وتنفيذ الجدران الخضراء الداخلية والخارجية لإضافة لمسة طبيعية فاخرة.',
            ],
            [
                'title' => 'زراعة وتجميل الأسطح',
                'icon' => 'fa-solid fa-seedling',
                'description' => 'تحويل الأسطح إلى حدائق جميلة مستدامة بطرق مبتكرة وصديقة للبيئة.',
            ],
            [
                'title' => 'النوافير والشلالات',
                'icon' => 'fa-solid fa-water',
                'description' => 'تصميم وتركيب النوافير والشلالات لخلق أجواء هادئة ومناظر جمالية مميزة.',
            ],
            [
                'title' => 'النباتات الداخلية ونباتات أسفل الدرج',
                'icon' => 'fa-solid fa-leaf',
                'description' => 'توفير نباتات داخلية طبيعية وصناعية مناسبة للإضاءة والمناخ الداخلي.',
            ],
            [
                'title' => 'أنظمة الضباب والرزاز',
                'icon' => 'fa-solid fa-cloud',
                'description' => 'تركيب أنظمة تبريد ضبابية ورذاذ لتلطيف الأجواء في الحدائق والأماكن المفتوحة.',
            ],
            [
                'title' => 'العشب الصناعي',
                'icon' => 'fa-solid fa-grass',
                'description' => 'توريد وتركيب العشب الصناعي عالي الجودة لتجميل المساحات الخارجية.',
            ],
        ];

        $sort = 1;

        foreach ($services as $data) {
            $service = Pagservice::create([
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'icon' => $data['icon'],
                'description' => $data['description'],
                'sort_order' => $sort++,
            ]);

            // صور افتراضية لكل خدمة
            $sampleImages = [
                'https://picsum.photos/seed/'.$service->id.'a/800/600',
                'https://picsum.photos/seed/'.$service->id.'b/800/600',
            ];
            foreach ($sampleImages as $img) {
                ServiceImage::create([
                    'service_id' => $service->id,
                    'image' => $img,
                ]);
            }

            // مميزات عامة لكل خدمة
            $features = [
                [
                    'title' => 'جودة عالية',
                    'icon' => 'fa-solid fa-award',
                    'description' => 'نستخدم مواد ومعايير عالية الجودة في كل مرحلة من مراحل التنفيذ.',
                ],
                [
                    'title' => 'فريق متخصص',
                    'icon' => 'fa-solid fa-users',
                    'description' => 'فريق عمل مؤهل ومدرب لضمان أفضل النتائج في التنفيذ والصيانة.',
                ],
                [
                    'title' => 'حلول مستدامة',
                    'icon' => 'fa-solid fa-leaf',
                    'description' => 'نقدم حلولًا بيئية صديقة للطبيعة للحفاظ على استدامة المشاريع.',
                ],
            ];
            foreach ($features as $f) {
                ServiceFeature::create([
                    'pagservice_id' => $service->id,
                    'title' => $f['title'],
                    'icon' => $f['icon'],
                    'description' => $f['description'],
                ]);
            }
        }

        echo "✅ تم إدخال خدمات شركة مضياف مع الصور والمميزات بنجاح.\n";
    }
}
