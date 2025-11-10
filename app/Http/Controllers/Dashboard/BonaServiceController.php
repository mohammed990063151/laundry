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
    //         'image'       => 'nullable|image|mimes:jpg,jpeg,png',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $filename = time().'_service_'.$file->getClientOriginalName();
    //         $dest = public_path('img/bona/services');
    //         if (!file_exists($dest)) mkdir($dest, 0755, true);
    //         $file->move($dest, $filename);
    //         $data['image'] = 'img/bona/services/'.$filename;
    //     }

    //     BonaService::create($data);

    //     return redirect()->route('dashboard.bona-services.index')->with('success','تمت إضافة الخدمة بنجاح ✅');
    // }
    public function store(Request $request)
{
    $data = $request->validate([
        'badge'       => 'nullable|string',
        'title'       => 'required|string',
        'description' => 'nullable|string',
        'sort_order'  => 'nullable|integer',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
    ]);

    // 🧠 تحديد مجلد الحفظ الديناميكي (يعمل في local و server)
    $dest = app()->environment('local')
        ? public_path('img/bona/services')  // على جهازك
        : base_path('../public_html/img/bona/services'); // على السيرفر

    // 📁 إنشاء المجلد إذا لم يكن موجودًا
    if (!file_exists($dest)) {
        mkdir($dest, 0755, true);
    }

    // 🖼️ رفع الصورة إن وجدت
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_service_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($dest, $filename);

        // 🔗 حفظ المسار النسبي في قاعدة البيانات
        $data['image'] = 'img/bona/services/' . $filename;
    }

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

    public function update(Request $request, BonaService $bona_service)
    {
        $data = $request->validate([
            'badge'       => 'nullable|string',
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'sort_order'  => 'nullable|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {
            if ($bona_service->image && file_exists(public_path($bona_service->image))) {
                unlink(public_path($bona_service->image));
            }

            $file = $request->file('image');
            $filename = time().'_service_'.$file->getClientOriginalName();
            $dest = public_path('img/bona/services');
            if (!file_exists($dest)) mkdir($dest, 0755, true);
            $file->move($dest, $filename);
            $data['image'] = 'img/bona/services/'.$filename;
        }

        $bona_service->update($data);

        return redirect()->route('dashboard.bona-services.index')->with('success','تم تحديث الخدمة ✅');
    }

    public function destroy(BonaService $bona_service)
    {
        if ($bona_service->image && file_exists(public_path($bona_service->image))) {
            unlink(public_path($bona_service->image));
        }
        $bona_service->delete();

        return back()->with('success','تم حذف الخدمة ❌');
    }
}
