<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaServicesSetting;

class BonaServicesSettingsController extends Controller
{
    public function index()
    {
        $settings = BonaServicesSetting::first();

        if (!$settings) {
            $settings = BonaServicesSetting::create([
                'hero_title'   => 'خدماتنا في بونا',
                'hero_subtitle'=> 'حلول غسيل متكاملة تجمع بين التكنولوجيا الحديثة والخدمة المميزة.',
            ]);
        }

        return view('admin.bona_services.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = BonaServicesSetting::first();

        $data = $request->validate([
            'hero_title'        => 'nullable|string',
            'hero_subtitle'     => 'nullable|string',
            'whyus_badge'       => 'nullable|string',
            'whyus_title'       => 'nullable|string',
            'whyus_text'        => 'nullable|string',
            'cta_title'         => 'nullable|string',
            'cta_subtitle'      => 'nullable|string',
            'cta_button_text'   => 'nullable|string',
            'cta_button_link'   => 'nullable|string',
        ]);

$dest = app()->environment('local')
    ? public_path('img/bona/services')            // عندك محلي
    : base_path('../public_html/img/bona/services'); // على السيرفر

if (!file_exists($dest)) {
    mkdir($dest, 0755, true);
}

// ✅ رفع الصور المختلفة
$images = [
    'hero_background' => 'hero',
    'whyus_image'     => 'whyus',
    'big_image'       => 'big',
    'cta_background'  => 'cta',
];

foreach ($images as $field => $prefix) {
    if ($request->hasFile($field)) {
        $file = $request->file($field);
        $filename = time() . "_{$prefix}_" . $file->getClientOriginalName();
        $file->move($dest, $filename);
        $data[$field] = 'img/bona/services/' . $filename;
    }
}


        $settings->update($data);

        return back()->with('success', 'تم تحديث إعدادات صفحة الخدمات بنجاح ✅');
    }
}
