<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BonaProject;
use App\Models\BonaProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class BonaProjectController extends Controller
{
    public function index()
    {
        $projects = BonaProject::orderBy('sort_order')->paginate(10);
        return view('admin.bona.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.bona.projects.create');
    }

    public function store(Request $request)
    {
        // return $request;
        $data = $request->validate([
            'title'   => 'required|string|max:255',
            'location'=> 'nullable|string',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image',
            'sort_order' => 'nullable|integer',
            'gallery.*' => 'image'
        ]);
$data['slug'] = Str::slug($request->title) . '-' . time();

        // حفظ الصورة الرئيسية
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('bona/projects', 'public');
        }

        $project = BonaProject::create($data);

        // حفظ صور المعرض
        if ($request->hasFile('gallery')) {
            foreach ($request->gallery as $img) {
                BonaProjectImage::create([
                    'project_id' => $project->id,
                    'image' => $img->store('bona/project_gallery', 'public')
                ]);
            }
        }

        return redirect()->route('dashboard.bona-projects.index')
            ->with('success', 'تم إضافة المشروع بنجاح');
    }

    public function edit($id)
    {
        $project = BonaProject::with('images')->findOrFail($id);
        return view('admin.bona.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = BonaProject::findOrFail($id);

        $data = $request->validate([
            'title'   => 'required|string|max:255',
            'location'=> 'nullable|string',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image',
            'sort_order' => 'nullable|integer',
            'gallery.*' => 'image'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('bona/projects', 'public');
        }
if ($project->title !== $request->title) {
    $data['slug'] = Str::slug($request->title) . '-' . $project->id;
}

        $project->update($data);

        // حفظ الصور الجديدة
        if ($request->hasFile('gallery')) {
            foreach ($request->gallery as $img) {
                BonaProjectImage::create([
                    'project_id' => $project->id,
                    'image' => $img->store('bona/project_gallery', 'public')
                ]);
            }
        }

        return back()->with('success', 'تم تحديث المشروع بنجاح');
    }

    public function deleteImage($id)
    {
        $image = BonaProjectImage::findOrFail($id);
        $image->delete();
        return back()->with('success', 'تم حذف الصورة');
    }

    public function destroy($id)
    {
        BonaProject::findOrFail($id)->delete();
        return back()->with('success', 'تم حذف المشروع');
    }
    public function deleteMainImage($projectId)
{
    $project = BonaProject::findOrFail($projectId);

    // حذف الصورة من التخزين
    if ($project->image && Storage::disk('public')->exists($project->image)) {
        Storage::disk('public')->delete($project->image);
    }

    // إفراغ حقل الصورة
    $project->update([
        'image' => null
    ]);

    return back()->with('success', 'تم حذف الصورة الأساسية بنجاح');
}

}


