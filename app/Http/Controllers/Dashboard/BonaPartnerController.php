<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaPartner;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'link' => 'nullable|url',
        ]);

        // if ($request->hasFile('logo')) {
        //     $data['logo'] = $request->file('logo')->store('uploads/partners', 'public');
        // }
        if ($request->hasFile('logo')) {
    $file = $request->file('logo');
    $filename = time() . '_' . $file->getClientOriginalName();
    $destinationPath = public_path('img/partners');
    $file->move($destinationPath, $filename);
    $data['logo'] = 'img/partners/' . $filename;
}


        BonaPartner::create($data);

        return redirect()->route('dashboard.partners.index')->with('success', 'تمت إضافة الشريك بنجاح ✅');
    }

    public function edit(BonaPartner $partner)
    {
        return view('admin.bona.partners.edit', compact('partner'));
    }

    public function update(Request $request, BonaPartner $partner)
    {
        $data = $request->validate([
            'name' => 'required',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'link' => 'nullable|url',
        ]);

       if ($request->hasFile('logo')) {
    // حذف الصورة القديمة إن وجدت
    if ($partner->logo && file_exists(public_path($partner->logo))) {
        unlink(public_path($partner->logo));
    }

    // حفظ الصورة الجديدة في نفس مسار الإضافة
    $file = $request->file('logo');
    $filename = time() . '_' . $file->getClientOriginalName();
    $destinationPath = public_path('img/partners');

    // إنشاء المجلد إذا لم يكن موجودًا
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0755, true);
    }

    $file->move($destinationPath, $filename);

    // حفظ المسار في قاعدة البيانات
    $data['logo'] = 'img/partners/' . $filename;
}


        $partner->update($data);

        return redirect()->route('dashboard.partners.index')->with('success', 'تم تحديث بيانات الشريك ✅');
    }

    public function destroy(BonaPartner $partner)
    {
        if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return back()->with('success', 'تم حذف الشريك بنجاح ❌');
    }
}
