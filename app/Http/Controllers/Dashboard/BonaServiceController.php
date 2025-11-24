<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaService;
use App\Models\BonaServicesSetting;
use Illuminate\Support\Str;


class BonaServiceController extends Controller
{
    public function index()
    {
        $services = BonaService::orderBy('sort_order')->get();
        return view('admin.bona.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.bona.services.create');
    }


//     public function store(Request $request)
// {
//     $data = $request->validate([
//         'badge'       => 'nullable|string',
//         'title'       => 'required|string',
//         'description' => 'nullable|string',
//         'sort_order'  => 'nullable|integer',
//         'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
//     ]);

//     // 🧠 تحديد مجلد الحفظ الديناميكي (يعمل في local و server)
//     $dest = app()->environment('local')
//         ? public_path('img/bona/services')  // على جهازك
//         : base_path('../public_html/img/bona/services'); // على السيرفر

//     // 📁 إنشاء المجلد إذا لم يكن موجودًا
//     if (!file_exists($dest)) {
//         mkdir($dest, 0755, true);
//     }

//     // 🖼️ رفع الصورة إن وجدت
//     if ($request->hasFile('image')) {
//         $file = $request->file('image');
//         $filename = time() . '_service_' . uniqid() . '.' . $file->getClientOriginalExtension();
//         $file->move($dest, $filename);

//         // 🔗 حفظ المسار النسبي في قاعدة البيانات
//         $data['image'] = 'img/bona/services/' . $filename;
//     }
// $service->slug = Str::slug($request->title) . '-' . time();

//     BonaService::create($data);

//     return redirect()
//         ->route('dashboard.bona-services.index')
//         ->with('success', '✅ تمت إضافة الخدمة وحفظ الصورة بنجاح');
// }
public function store(Request $request)
{
    $data = $request->validate([
        'badge'       => 'nullable|string',
        'title'       => 'required|string',
        'description' => 'nullable|string',
        'sort_order'  => 'nullable|integer',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
    ]);

    // 🧠 مسار الحفظ (يعمل محلي + سيرفر)
    $dest = app()->environment('local')
        ? public_path('img/bona/services')
        : base_path('../public_html/img/bona/services');

    // 📁 إنشاء المجلد إذا لم يكن موجودًا
    if (!file_exists($dest)) {
        mkdir($dest, 0755, true);
    }

    // 🖼️ رفع الصورة
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_service_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($dest, $filename);

        // المسار النسبي
        $data['image'] = 'img/bona/services/' . $filename;
    }

    // ⭐ إضافة slug قبل الإنشاء
    $data['slug'] = Str::slug($request->title) . '-' . time();

    // 📝 إنشاء السجل
    BonaService::create($data);

    return redirect()
        ->route('dashboard.bona-services.index')
        ->with('success', '✅ تمت إضافة الخدمة وحفظ الصورة بنجاح');
}

    public function edit(BonaService $bona_service , $service)
    {
        // return $service;
            $service = BonaService::findOrFail($service);
        return view('admin.bona.services.edit', compact('service'));
    }


//     public function update(Request $request, BonaService $bona_service)
// {
//     // ✅ التحقق من صحة البيانات
//     $data = $request->validate([
//         'badge'       => 'nullable|string',
//         'title'       => 'required|string',
//         'description' => 'nullable|string',
//         'sort_order'  => 'nullable|integer',
//         'image'       => 'nullable|image|mimes:jpg,jpeg,png',
//     ]);

//     // 🧠 نفس منطق المسار الموجود في store()
//     $dest = app()->environment('local')
//         ? public_path('img/bona/services')                 // على جهازك
//         : base_path('../public_html/img/bona/services');   // على السيرفر

//     // 📁 إنشاء المجلد إذا لم يكن موجودًا
//     if (!file_exists($dest)) {
//         mkdir($dest, 0755, true);
//     }

//     // 🖼️ لو فيه صورة جديدة
//     if ($request->hasFile('image')) {
//         // 🗑️ حذف الصورة القديمة من نفس المسار الفعلي
//         if (!empty($bona_service->image)) {

//             $oldPath = app()->environment('local')
//                 ? public_path($bona_service->image)                 // local
//                 : base_path('../public_html/'.$bona_service->image); // server

//             if (file_exists($oldPath)) {
//                 @unlink($oldPath);
//             }
//         }

//         // 🖼️ رفع الصورة الجديدة
//         $file = $request->file('image');
//         $filename = time() . '_service_' . uniqid() . '.' . $file->getClientOriginalExtension();
//         $file->move($dest, $filename);

//         // 🔗 حفظ المسار النسبي في الداتابيس
//         $data['image'] = 'img/bona/services/' . $filename;
//     }

//     // ✅ تحديث بيانات الخدمة
//     $bona_service->update($data);

//     return redirect()
//         ->route('dashboard.bona-services.index')
//         ->with('success', '✅ تم تحديث الخدمة بنجاح');
// }
public function update(Request $request, BonaService $bona_service)
{
    // return $request->title;
    // ✅ التحقق من صحة البيانات
    $data = $request->validate([
        'badge'       => 'nullable|string',
        'title'       => 'required|string',
        'description' => 'nullable|string',
        'sort_order'  => 'nullable|integer',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
    ]);

    // 🧠 نفس منطق المسار الموجود في store()
    $dest = app()->environment('local')
        ? public_path('img/bona/services')
        : base_path('../public_html/img/bona/services');

    // 📁 إنشاء المجلد إذا لم يكن موجودًا
    if (!file_exists($dest)) {
        mkdir($dest, 0755, true);
    }

    // 🖼️ لو فيه صورة جديدة
    if ($request->hasFile('image')) {

        // 🗑️ حذف الصورة القديمة من المسار الصحيح
        if (!empty($bona_service->image)) {

            $oldPath = app()->environment('local')
                ? public_path($bona_service->image)
                : base_path('../public_html/' . $bona_service->image);

            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }

        // 🖼️ رفع الصورة الجديدة
        $file = $request->file('image');
        $filename = time() . '_service_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($dest, $filename);

        // 🔗 حفظ المسار النسبي
        $data['image'] = 'img/bona/services/' . $filename;
    }

    // ⭐ تحديث slug فقط إن تغيّر العنوان
    // if ($bona_service->title !== $request->title) {
        $data['slug'] = Str::slug($request->title) . '-' . $bona_service->id;
    // }

    // ✅ تحديث بيانات الخدمة
    $bona_service->update($data);
    // dd($data);


    return redirect()
        ->route('dashboard.bona-services.index')
        ->with('success', '✅ تم تحديث الخدمة بنجاح');
}



    public function destroy(BonaService $service)
    {
        // return $service;
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }
        $service->delete();

        return back()->with('success','تم حذف الخدمة ❌');
    }

    public function show($slug)
{

 $settinges     = BonaServicesSetting::first();
      $services = BonaService::inRandomOrder('sort_order')->take(3)->get();
    // جلب الخدمة المطلوبة
    $service = BonaService::with('details')->where('slug', $slug)->firstOrFail();


    return view('frontend.services.show', compact('service','services','settinges'));
}

}
