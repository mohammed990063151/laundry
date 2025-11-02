<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\WhyUs;
use Illuminate\Support\Facades\Storage;

class WhyUsController extends Controller
{
    public function index()
    {
        $whyus = WhyUs::first();
        return view('admin.whyus.index', compact('whyus'));
    }

    //     public function update(Request $request)
    //     {
    //         return $request;
    //         $data = $request->validate([
    //             'title'       => 'required',
    //             'description' => 'required',
    //             'image1'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //             'image2'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //             'image3'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //             'image4'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //         ]);

    //         $whyus = WhyUs::first();

    //         foreach(['image1','image2','image3','image4'] as $img){
    //             if ($request->hasFile($img)) {

    //                 if ($whyus->$img && Storage::disk('public_uploads')->exists($whyus->$img)) {
    //                     Storage::disk('public_uploads')->delete($whyus->$img);
    //                 }

    //                 $file = $request->file($img);
    //                 $name = time().'_'.$img.'.'.$file->getClientOriginalExtension();

    //                 $data[$img] = $file->storeAs(
    //                     'dashboard_files/img/whyus',
    //                     $name,
    //                     'public_uploads'
    //                 );
    //             }
    //         }
    // // return $request;
    //         $whyus->update($data);

    //         return back()->with('success','✅ تم تحديث البيانات بنجاح');
    //     }
    // public function update(Request $request)
    // {
    //     $data = $request->validate([
    //         'title'       => 'required',
    //         'description' => 'required',
    //         'image1'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //         'image2'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //         'image3'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //         'image4'      => 'image|mimes:jpg,png,jpeg|max:2048',
    //     ]);

    //     $whyus = WhyUs::first();

    //     foreach(['image1','image2','image3','image4'] as $img){
    //         if ($request->hasFile($img)) {

    //             // حذف الصورة القديمة
    //             if ($whyus->$img && Storage::disk('public_uploads')->exists($whyus->$img)) {
    //                 Storage::disk('public_uploads')->delete($whyus->$img);
    //             }

    //             // رفع الصورة الجديدة
    //             $file = $request->file($img);
    //             $name = time().'_'.$img.'.'.$file->getClientOriginalExtension();

    //             $data[$img] = $file->storeAs(
    //                 'dashboard_files/img/whyus',
    //                 $name,
    //                 'public_uploads'
    //             );
    //         }
    //     }

    //     $whyus->update($data);

    //     return back()->with('success', '✅ تم تحديث البيانات بنجاح');
    // }
 public function update(Request $request)
{
    try {
        $data = $request->validate([
            'title'       => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image1'      => 'nullable|image|mimes:jpg,png,jpeg',
            'image2'      => 'nullable|image|mimes:jpg,png,jpeg',
            'image3'      => 'nullable|image|mimes:jpg,png,jpeg',
            'image4'      => 'nullable|image|mimes:jpg,png,jpeg',
        ]);

        $whyus = WhyUs::firstOrCreate([]);

        foreach (['image1', 'image2', 'image3', 'image4'] as $img) {
            if ($request->hasFile($img)) {

                if ($whyus->$img && Storage::disk('public_uploads')->exists($whyus->$img)) {
                    Storage::disk('public_uploads')->delete($whyus->$img);
                }

                $file = $request->file($img);
                $name = time() . '_' . $img . '.' . $file->getClientOriginalExtension();

                $data[$img] = $file->storeAs(
                    'dashboard_files/img/whyus',
                    $name,
                    'public_uploads'
                );
            }
        }

        $whyus->fill($data)->save();

        return back()->with('success', '✅ تم حفظ البيانات بنجاح');

    } catch (\Exception $e) {
        return back()->with('error', '❌ حدث خطأ: ' . $e->getMessage());
    }
}


}
