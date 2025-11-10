<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first(); // نفترض أنه يوجد إعداد واحد فقط
        return view('admin.settings.edit', compact('setting'));
    }

//     public function update(Request $request)
//     {
//         $setting = Setting::first();

//         $request->validate([
//             'name' => 'nullable|string|max:255',
//             'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'email' => 'nullable|email',
//             'phone' => 'nullable|string|max:20',
//             'address' => 'nullable|string',
//             'facebook' => 'nullable|url',
//             'twitter' => 'nullable|url',
//             'instagram' => 'nullable|url',
//             'linkedin' => 'nullable|url',
//         ]);

//         $data = $request->except('logo');

//         // رفع اللوجو إذا تم اختياره
//         if ($request->hasFile('logo')) {
//             if ($setting && $setting->logo) {
//                 Storage::delete($setting->logo);
//             }
//          $data['logo'] = $request->file('logo')->storeAs(
//     'dashboard_files/img/logos',
//     time() . '.' . $request->file('logo')->getClientOriginalExtension(),
//     'public_uploads'
// );

//         }

//         if ($setting) {
//             $setting->update($data);
//         } else {
//             Setting::create($data);
//         }

//         return redirect()->back()->with('success', 'تم تحديث بيانات الشركة بنجاح');
//     }
public function update(Request $request)
{
    $setting = Setting::first();

    $data = $request->validate([
        'name'      => 'nullable|string|max:255',
        'logo'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'email'     => 'nullable|email',
        'phone'     => 'nullable|string|max:20',
        'address'   => 'nullable|string',
        'facebook'  => 'nullable|url',
        'twitter'   => 'nullable|url',
        'instagram' => 'nullable|url',
        'linkedin'  => 'nullable|url',
    ]);

    // 📁 تحديد المسار الديناميكي (يعمل على local و cPanel)
    $dest = app()->environment('local')
        ? public_path('dashboard_files/img/logos')              // على جهازك
        : base_path('../public_html/dashboard_files/img/logos'); // على السيرفر

    if (!file_exists($dest)) {
        mkdir($dest, 0755, true);
    }

    // 🖼️ رفع اللوجو إذا تم اختياره
    if ($request->hasFile('logo')) {

        // 🗑️ حذف اللوجو القديم
        if (!empty($setting->logo)) {
            $oldPath = app()->environment('local')
                ? public_path($setting->logo)
                : base_path('../public_html/' . $setting->logo);

            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }

        // 🆕 رفع الجديد
        $file = $request->file('logo');
        $filename = time() . '_logo_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($dest, $filename);

        // 🔗 حفظ المسار النسبي في قاعدة البيانات
        $data['logo'] = 'dashboard_files/img/logos/' . $filename;
    }

    // ✅ تحديث أو إنشاء البيانات
    if ($setting) {
        $setting->update($data);
    } else {
        Setting::create($data);
    }

    return redirect()
        ->back()
        ->with('success', '✅ تم تحديث بيانات الشركة وحفظ الصورة بنجاح');
}

}
