<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BonaService;
use App\Models\BonaServiceDetail;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class BonaServiceDetailController extends Controller
{
    public function index()
{
    $details = BonaServiceDetail::with('service')->orderBy('sort_order')->get();

    return view('admin.service_details.index', compact('details'));
}

    public function create($service_id)
    {
        $service = BonaService::findOrFail($service_id);
        return view('admin.service_details.create', compact('service'));
    }

    public function store(Request $request, $service_id)
    {
        $service = BonaService::findOrFail($service_id);

        $data = $request->validate([
            'title' => 'nullable|string',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image',
            'gallery.*' => 'image',
            'features' => 'nullable|string',
            'video_url' => 'nullable|string',
            'sort_order' => 'nullable|integer'
        ]);

        // رفع الصورة الأساسية
        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store('service_details', 'public');
        }

        // رفع صور المعرض
        if ($request->hasFile('gallery')) {
            $galleryImages = [];
            foreach ($request->gallery as $file) {
                $galleryImages[] = $file->store('service_details/gallery', 'public');
            }
            $data['gallery'] = $galleryImages;
        }



        // تحويل المميزات من نص إلى array
        if ($request->features) {
            $data['features'] = array_map('trim', explode("\n", $request->features));
        }

        $data['bona_service_id'] = $service_id;

        BonaServiceDetail::create($data);

        return redirect()->route('dashboard.bona.services.index', $service_id)
                         ->with('success', 'تم إضافة تفاصيل الخدمة بنجاح');
    }

    public function edit($service_id, $detail_id)
{
    $service = BonaService::findOrFail($service_id);
    $detail  = BonaServiceDetail::findOrFail($detail_id);

    return view('admin.service_details.edit', compact('service', 'detail'));
}
public function update(Request $request, $service_id, $detail_id)
{
    $detail = BonaServiceDetail::findOrFail($detail_id);

    $data = $request->validate([
        'title' => 'nullable|string',
        'long_description' => 'nullable|string',
        'image' => 'nullable|image',
        'gallery.*' => 'image',
        'features' => 'nullable|string',
        'video_url' => 'nullable|string',
        'sort_order' => 'nullable|integer',
    ]);

    // تحديث الصورة الأساسية
    if ($request->hasFile('image')) {

        if ($detail->image && file_exists(public_path('storage/'.$detail->image))) {
            unlink(public_path('storage/'.$detail->image));
        }

        $data['image'] = $request->image->store('service_details', 'public');
    }

    // تحديث معرض الصور
    if ($request->hasFile('gallery')) {

        $galleryImages = $detail->gallery ?? [];

        foreach ($request->gallery as $file) {
            $galleryImages[] = $file->store('service_details/gallery', 'public');
        }

        $data['gallery'] = $galleryImages;
    }

    // تحديث المميزات
    if ($request->features) {
        $data['features'] = array_map('trim', explode("\n", $request->features));
    }

    $detail->update($data);

    return redirect()
        ->route('dashboard.service.details.index', $service_id)
        ->with('success', 'تم تحديث تفاصيل الخدمة بنجاح');
}
public function destroy($id)
{
    // return $id;

    // ابحث عن السجل
    $item = \App\Models\BonaServiceDetail::find($id);
// return $item;
    if (!$item) {
        return redirect()->back()->with('error', 'العنصر غير موجود.');
    }

    try {
        // حذف السجل
        $item->delete();

        return redirect()->back()->with('success', 'تم حذف العنصر بنجاح.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'حدث خطأ أثناء الحذف.');
    }
}

public function deleteMainImage($service_id, $detail_id)
{
    $detail = BonaServiceDetail::findOrFail($detail_id);

    if ($detail->image) {

        $path = app()->environment('local')
            ? public_path($detail->image)
            : base_path('../public_html/'.$detail->image);

        if (file_exists($path)) {
            unlink($path);
        }

        $detail->update(['image' => null]);
    }

    return response()->json(['message' => 'تم حذف الصورة الأساسية بنجاح']);
}



public function deleteGalleryImage(Request $request, $service_id, $detail_id)
{
    $detail = BonaServiceDetail::findOrFail($detail_id);

    $imagePath = $request->image_path;

    $fullPath = app()->environment('local')
        ? public_path($imagePath)
        : base_path('../public_html/'.$imagePath);

    if (file_exists($fullPath)) {
        unlink($fullPath);
    }

    // ازالة الصورة من المصفوفة
    $newGallery = array_filter($detail->gallery, function ($item) use ($imagePath) {
        return $item !== $imagePath;
    });

    $detail->update(['gallery' => array_values($newGallery)]);

    return response()->json(['message' => 'تم حذف الصورة من المعرض']);
}




}
