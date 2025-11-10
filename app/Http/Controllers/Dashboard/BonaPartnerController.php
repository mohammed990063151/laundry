<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaPartner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BonaPartnerController extends Controller
{
    public function index()
    {
        $partners = BonaPartner::latest()->paginate(10);
        return view('admin.bona.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.bona.partners.create');
    }

//     public function store(Request $request)
//     {
//         $data = $request->validate([
//             'name' => 'required',
//             'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
//             'link' => 'nullable|url',
//         ]);

//         // if ($request->hasFile('logo')) {
//         //     $data['logo'] = $request->file('logo')->store('uploads/partners', 'public');
//         // }
//         if ($request->hasFile('logo')) {
//     $file = $request->file('logo');
//     $filename = time() . '_' . $file->getClientOriginalName();
//     $destinationPath = public_path('img/partners');
//     $file->move($destinationPath, $filename);
//     $data['logo'] = 'img/partners/' . $filename;
// }


//         BonaPartner::create($data);

//         return redirect()->route('dashboard.partners.index')->with('success', 'تمت إضافة الشريك بنجاح ✅');
//     }
   public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:4096',
            'link' => 'nullable|url',
        ]);

        // ✅ تحديد المسار الصحيح حسب البيئة
        $uploadPath = app()->environment('local')
            ? public_path('img/partners')
            : base_path('../public_html/img/partners');

        // إنشاء المجلد إذا لم يكن موجود
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }

        // 🖼️ رفع الصورة
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_partner.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);
            $data['logo'] = 'img/partners/' . $filename;
        }

        BonaPartner::create($data);

        return redirect()->route('dashboard.partners.index')
                         ->with('success', '✅ تمت إضافة الشريك بنجاح');
    }

    public function edit(BonaPartner $partner)
    {
        return view('admin.bona.partners.edit', compact('partner'));
    }

//     public function update(Request $request, BonaPartner $partner)
//     {
//         $data = $request->validate([
//             'name' => 'required',
//             'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
//             'link' => 'nullable|url',
//         ]);

//        if ($request->hasFile('logo')) {
//     // حذف الصورة القديمة إن وجدت
//     if ($partner->logo && file_exists(public_path($partner->logo))) {
//         unlink(public_path($partner->logo));
//     }

//     // حفظ الصورة الجديدة في نفس مسار الإضافة
//     $file = $request->file('logo');
//     $filename = time() . '_' . $file->getClientOriginalName();
//     $destinationPath = public_path('img/partners');

//     // إنشاء المجلد إذا لم يكن موجودًا
//     if (!file_exists($destinationPath)) {
//         mkdir($destinationPath, 0755, true);
//     }

//     $file->move($destinationPath, $filename);

//     // حفظ المسار في قاعدة البيانات
//     $data['logo'] = 'img/partners/' . $filename;
// }


//         $partner->update($data);

//         return redirect()->route('dashboard.partners.index')->with('success', 'تم تحديث بيانات الشريك ✅');
//     }

 public function update(Request $request, BonaPartner $partner)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:4096',
            'link' => 'nullable|url',
        ]);

        // ✅ تحديد المسار الصحيح
        $uploadPath = app()->environment('local')
            ? public_path('img/partners')
            : base_path('../public_html/img/partners');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }

        // 🖼️ إذا تم رفع صورة جديدة
        if ($request->hasFile('logo')) {
            // حذف الصورة القديمة
            if (!empty($partner->logo) && File::exists($this->getFullPath($partner->logo))) {
                File::delete($this->getFullPath($partner->logo));
            }

            // رفع الصورة الجديدة
            $file = $request->file('logo');
            $filename = time() . '_partner.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);
            $data['logo'] = 'img/partners/' . $filename;
        }

        $partner->update($data);

        return redirect()->route('dashboard.partners.index')
                         ->with('success', '✅ تم تحديث بيانات الشريك بنجاح');
    }

    public function destroy(BonaPartner $partner)
    {
        if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return back()->with('success', 'تم حذف الشريك بنجاح ❌');
    }
     private function getFullPath($relativePath)
    {
        if (!$relativePath) return null;

        $root = app()->environment('local')
            ? public_path('/')
            : base_path('../public_html/');

        return $root . $relativePath;
    }
}
