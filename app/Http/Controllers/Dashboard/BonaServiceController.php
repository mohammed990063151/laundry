<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaService;

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

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'badge'       => 'nullable|string',
    //         'title'       => 'required|string',
    //         'description' => 'nullable|string',
    //         'sort_order'  => 'nullable|integer',
    //         'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    //     ]);

    //     // if ($request->hasFile('image')) {
    //     //     $file = $request->file('image');
    //     //     $filename = time().'_service_'.$file->getClientOriginalName();
    //     //     $dest = public_path('img/bona/services');
    //     //     if (!file_exists($dest)) mkdir($dest, 0755, true);
    //     //     $file->move($dest, $filename);
    //     //     $data['image'] = 'img/bona/services/'.$filename;
    //     // }
    //     if ($request->hasFile('image')) {

    //         // ✅ تحديد المسار
    //         $dest = public_path('img/bona/services');

    //         // ✅ إنشاء المجلد إذا لم يكن موجودًا
    //         if (!file_exists($dest)) {
    //             mkdir($dest, 0755, true);
    //         }

    //         // ✅ حذف الصورة القديمة إن وُجدت
    //         if (!empty($service->image) && file_exists(public_path($service->image))) {
    //             unlink(public_path($service->image));
    //         }

    //         // ✅ إنشاء اسم فريد للملف (timestamp + random string)
    //         $file = $request->file('image');
    //         $filename = time() . '_service_' . uniqid() . '.' . $file->getClientOriginalExtension();

    //         // ✅ نقل الملف إلى المجلد
    //         $file->move($dest, $filename);

    //         // ✅ حفظ المسار بالنسبة للموقع (بدون public/)
    //         $data['image'] = 'img/bona/services/' . $filename;
    //     }


    //     BonaService::create($data);

    //     return redirect()->route('dashboard.bona-services.index')->with('success', 'تمت إضافة الخدمة بنجاح ✅');
    // }
    public function store(Request $request)
{
    // ✅ التحقق من صحة البيانات
    $data = $request->validate([
        'badge'       => 'nullable|string',
        'title'       => 'required|string',
        'description' => 'nullable|string',
        'sort_order'  => 'nullable|integer',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png',
    ]);

    // ✅ رفع الصورة إلى مجلد public_html/img/bona/services
    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // اسم فريد للملف
        $filename = time().'_service_'.uniqid().'.'.$file->getClientOriginalExtension();

        // المسار داخل public
        $destination = public_path('img/bona/services');

        // إنشاء المجلد إذا لم يكن موجودًا
        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        // نقل الصورة إلى المجلد
        $file->move($destination, $filename);

        // حفظ المسار النسبي في قاعدة البيانات
        $data['image'] = 'img/bona/services/'.$filename;
    }

    // ✅ إنشاء الخدمة
    BonaService::create($data);

    return redirect()
        ->route('dashboard.bona-services.index')
        ->with('success', '✅ تمت إضافة الخدمة وحفظ الصورة بنجاح');
}


    public function edit(BonaService $bona_service, $service)
    {
        // return $service;
        $service = BonaService::findOrFail($service);
        return view('admin.bona.services.edit', compact('service'));
    }

    public function update(Request $request, BonaService $bona_service)
    {
        $data = $request->validate([
            'badge'       => 'nullable|string',
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'sort_order'  => 'nullable|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        // if ($request->hasFile('image')) {
        //     if ($bona_service->image && file_exists(public_path($bona_service->image))) {
        //         unlink(public_path($bona_service->image));
        //     }

        //     $file = $request->file('image');
        //     $filename = time().'_service_'.$file->getClientOriginalName();
        //     $dest = public_path('img/bona/services');
        //     if (!file_exists($dest)) mkdir($dest, 0755, true);
        //     $file->move($dest, $filename);
        //     $data['image'] = 'img/bona/services/'.$filename;
        // }
        if ($request->hasFile('image')) {
            // 🗑️ حذف الصورة القديمة إن وجدت
            if (!empty($bona_service->image) && file_exists(public_path($bona_service->image))) {
                @unlink(public_path($bona_service->image));
            }

            // 🖼️ تجهيز الملف الجديد
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_service_' . uniqid() . '.' . $extension;

            // 📁 تحديد المسار وضمان وجود المجلد
            $destination = public_path('img/bona/services');
            if (!is_dir($destination)) {
                mkdir($destination, 0755, true);
            }

            // 📤 نقل الملف
            $file->move($destination, $filename);

            // 💾 حفظ المسار النسبي
            $data['image'] = 'img/bona/services/' . $filename;
        }


        $bona_service->update($data);

        return redirect()->route('dashboard.bona-services.index')->with('success', 'تم تحديث الخدمة ✅');
    }

    public function destroy(BonaService $bona_service)
    {
        if ($bona_service->image && file_exists(public_path($bona_service->image))) {
            unlink(public_path($bona_service->image));
        }
        $bona_service->delete();

        return back()->with('success', 'تم حذف الخدمة ❌');
    }
}
