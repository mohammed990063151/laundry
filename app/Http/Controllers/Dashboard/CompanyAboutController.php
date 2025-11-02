<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\CompanyAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyAboutController extends Controller
{
    public function index()
    {
        $about = CompanyAbout::first();
        return view('admin.company_about.index', compact('about'));
    }

    public function update(Request $request)
    {
        $about = CompanyAbout::first();

        $data = $request->validate([
            'title'       => 'required|max:255',
            'subtitle'    => 'nullable|max:255',
            'intro'       => 'nullable',
            'point1'      => 'nullable|max:255',
            'point2'      => 'nullable|max:255',
            'point3'      => 'nullable|max:255',
            'point4'      => 'nullable|max:255',
            'header_image'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        if ($request->hasFile('header_image')) {
            if ($about->header_image && Storage::disk('public_uploads')->exists($about->header_image)) {
                Storage::disk('public_uploads')->delete($about->header_image);
            }
            $file  = $request->file('header_image');
            $name  = time().'_about_header.'.$file->getClientOriginalExtension();
            $data['header_image'] = $file->storeAs(
                'dashboard_files/img/about', $name, 'public_uploads'
            );
        }

        $about->update($data);

        return back()->with('success','تم تحديث صفحة الشركة بنجاح ✅');
    }
}
