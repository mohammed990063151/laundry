<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::first();
        return view('admin.service.index', compact('service'));
    }

    public function update(Request $request)
    {
        $service = Service::first();

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'caption1' => 'nullable',
            'caption2' => 'nullable',
            'caption3' => 'nullable',
            'caption4' => 'nullable',
            'caption5' => 'nullable',
            'caption6' => 'nullable',
            'image1' => 'image|mimes:jpg,png,jpeg',
            'image2' => 'image|mimes:jpg,png,jpeg',
            'image3' => 'image|mimes:jpg,png,jpeg',
            'image4' => 'image|mimes:jpg,png,jpeg',
            'image5' => 'image|mimes:jpg,png,jpeg',
            'image6' => 'image|mimes:jpg,png,jpeg',
        ]);

        foreach(['image1','image2','image3','image4','image5','image6'] as $img){

            if ($request->hasFile($img)) {

                if ($service->$img && Storage::disk('public_uploads')->exists($service->$img)) {
                    Storage::disk('public_uploads')->delete($service->$img);
                }

                $file = $request->file($img);
                $name = time().'_'.$img.'.'.$file->getClientOriginalExtension();

                $data[$img] = $file->storeAs(
                    'dashboard_files/img/services',
                    $name,
                    'public_uploads'
                );
            }
        }

        $service->update($data);

        return back()->with('success','✅ تم تحديث خدمات الشركة بنجاح');
    }
}
