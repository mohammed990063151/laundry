<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BonaAboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BonaAboutController extends Controller
{
    public function edit()
    {
        $about = BonaAboutSection::first() ?? new BonaAboutSection();
        return view('admin.bona.about.edit', compact('about'));
    }

    // public function update(Request $request)
    // {
    //     $about = BonaAboutSection::first() ?? new BonaAboutSection();

    //     $data = $request->validate([
    //         'hero_title' => 'nullable|string',
    //         'hero_description' => 'nullable|string',
    //         'hero_image' => 'nullable|mimes:jpg,jpeg,png,webp|max:5120',
    //         'about_title' => 'nullable|string',
    //         'about_text' => 'nullable|string',
    //         'about_image' => 'nullable|mimes:jpg,jpeg,png,webp|max:5120',
    //         'vision_text' => 'nullable|string',
    //         'mission_text' => 'nullable|string',
    //         'values_text' => 'nullable|string',
    //         'story_title' => 'nullable|string',
    //         'story_text' => 'nullable|string',
    //         'story_image' => 'nullable|mimes:jpg,jpeg,png,webp|max:5120',
    //     ]);

    //     foreach (['hero_image', 'about_image', 'story_image'] as $imageField) {
    //         if ($request->hasFile($imageField)) {
    //             $data[$imageField] = $request->file($imageField)->store('img/bona/about', 'public');
    //         }
    //     }

    //     $about->fill($data)->save();

    //     return redirect()->back()->with('success', 'تم تحديث صفحة من نحن بنجاح ✅');
    // }


// public function update(Request $request)
// {
//     $about = BonaAboutSection::first() ?? new BonaAboutSection();

//     $data = $request->validate([
//         'hero_title' => 'nullable|string',
//         'hero_description' => 'nullable|string',
//         'hero_image' => 'nullable|mimes:jpg,jpeg,png,webp|max:5120',
//         'about_title' => 'nullable|string',
//         'about_text' => 'nullable|string',
//         'about_image' => 'nullable|mimes:jpg,jpeg,png,webp|max:5120',
//         'vision_text' => 'nullable|string',
//         'mission_text' => 'nullable|string',
//         'values_text' => 'nullable|string',
//         'story_title' => 'nullable|string',
//         'story_text' => 'nullable|string',
//         'story_image' => 'nullable|mimes:jpg,jpeg,png,webp|max:5120',
//     ]);

//     // 📁 مسار الحفظ داخل public
//     $uploadPath = public_path('img/bona/about');

//     // أنشئ المجلد إن لم يكن موجودًا
//     if (!File::exists($uploadPath)) {
//         File::makeDirectory($uploadPath, 0775, true);
//     }

//     // 🖼️ معالجة صورة الهيرو
//     if ($request->hasFile('hero_image')) {
//         if ($about->hero_image && File::exists(public_path($about->hero_image))) {
//             File::delete(public_path($about->hero_image));
//         }

//         $filename = time().'_hero.'.$request->file('hero_image')->extension();
//         $request->file('hero_image')->move($uploadPath, $filename);
//         $data['hero_image'] = 'img/bona/about/'.$filename;
//     }

//     // 🖼️ معالجة صورة قسم "من نحن"
//     if ($request->hasFile('about_image')) {
//         if ($about->about_image && File::exists(public_path($about->about_image))) {
//             File::delete(public_path($about->about_image));
//         }

//         $filename = time().'_about.'.$request->file('about_image')->extension();
//         $request->file('about_image')->move($uploadPath, $filename);
//         $data['about_image'] = 'img/bona/about/'.$filename;
//     }

//     // 🖼️ معالجة صورة القصة
//     if ($request->hasFile('story_image')) {
//         if ($about->story_image && File::exists(public_path($about->story_image))) {
//             File::delete(public_path($about->story_image));
//         }

//         $filename = time().'_story.'.$request->file('story_image')->extension();
//         $request->file('story_image')->move($uploadPath, $filename);
//         $data['story_image'] = 'img/bona/about/'.$filename;
//     }

//     // ✅ حفظ البيانات
//     $about->fill($data)->save();

//     return redirect()->back()->with('success', '✅ تم حفظ الصور في مجلد public/img/bona/about بنجاح');
// }
public function update(Request $request)
{
    // ✅ جلب السجل الحالي أو إنشاء جديد إن لم يوجد
    $about = BonaAboutSection::first() ?? new BonaAboutSection();

    // ✅ التحقق من جميع الحقول
    $data = $request->validate([
        'hero_title'       => 'nullable|string',
        'hero_description' => 'nullable|string',
        'hero_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

        'about_title'      => 'nullable|string',
        'about_text'       => 'nullable|string',
        'about_image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

        'vision_text'      => 'nullable|string',
        'mission_text'     => 'nullable|string',
        'values_text'      => 'nullable|string',

        'story_title'      => 'nullable|string',
        'story_text'       => 'nullable|string',
        'story_image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
    ]);

    // 📁 مسار الحفظ داخل public مباشرة
    $uploadPath = public_path('img/bona/about');

    // 🔧 إنشاء المجلد إذا لم يكن موجود
    if (!File::exists($uploadPath)) {
        File::makeDirectory($uploadPath, 0775, true);
    }

    // 🖼️ معالجة الصور الثلاث بطريقة ديناميكية
    foreach (['hero_image', 'about_image', 'story_image'] as $field) {
        if ($request->hasFile($field)) {
            // 🗑️ حذف القديمة إن وُجدت
            if (!empty($about->$field) && File::exists(public_path($about->$field))) {
                File::delete(public_path($about->$field));
            }

            // 🆕 رفع الصورة الجديدة
            $file = $request->file($field);
            $filename = time() . '_' . $field . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);

            // 🔗 حفظ المسار النسبي
            $data[$field] = 'img/bona/about/' . $filename;
        }
    }

    // ✅ تحديث وحفظ البيانات
    $about->fill($data)->save();

    return redirect()
        ->back()
        ->with('success', '✅ تم حفظ البيانات والصور بنجاح في مجلد public/img/bona/about');
}



}
