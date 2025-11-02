<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ModyafService;
use Illuminate\Http\Request;

class ModyafServiceController extends Controller
{
    // عرض القائمة
    public function index() {
        $services = ModyafService::all();
        return view('admin.modyaf.index', compact('services'));
    }

    // صفحة الإضافة
    public function create() {
        return view('admin.modyaf.create');
    }

    // حفظ الإضافة
    public function store(Request $request) {
        $data = $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:modyaf_services',
            'phone'=>'nullable',
            'email'=>'nullable',
            'address'=>'nullable',
            'image'=>'image',
            'description'=>'nullable'
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->image->store('uploads/modyaf','public');
        }

        ModyafService::create($data);
        return back()->with('success','✅ تمت الإضافة بنجاح');
    }

    // صفحة التعديل
    public function edit(ModyafService $service) {
        return view('admin.modyaf.edit', compact('service'));
    }

    // حفظ التعديل
    public function update(Request $request, ModyafService $service){
        $data = $request->validate([
            'title'=>'required',
            'phone'=>'nullable',
            'email'=>'nullable',
            'address'=>'nullable',
            'description'=>'nullable'
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->image->store('uploads/modyaf','public');
        }

        $service->update($data);

        return back()->with('success','✅ تم التحديث');
    }

    // حذف
    public function destroy(ModyafService $service){
        $service->delete();
        return back()->with('success','تم الحذف ✅');
    }
}

