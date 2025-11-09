<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaProject;
use Illuminate\Support\Facades\File;

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
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:4096',
            'sort_order' => 'nullable|integer',
        ]);

        // مسار الحفظ في public
        $uploadPath = public_path('img/bona/projects');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }

        if ($request->hasFile('image')) {
            $filename = time().'_project.'.$request->file('image')->extension();
            $request->file('image')->move($uploadPath, $filename);
            $data['image'] = 'img/bona/projects/'.$filename;
        }

        BonaProject::create($data);

        return redirect()->route('dashboard.bona.projects.index')
                         ->with('success', 'تمت إضافة المشروع بنجاح ✅');
    }

    public function edit(BonaProject $project)
    {
        return view('admin.bona.projects.edit', compact('project'));
    }

    public function update(Request $request, BonaProject $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:4096',
            'sort_order' => 'nullable|integer',
        ]);

        $uploadPath = public_path('img/bona/projects');

        if ($request->hasFile('image')) {
            if ($project->image && File::exists(public_path($project->image))) {
                File::delete(public_path($project->image));
            }

            $filename = time().'_project.'.$request->file('image')->extension();
            $request->file('image')->move($uploadPath, $filename);
            $data['image'] = 'img/bona/projects/'.$filename;
        }

        $project->update($data);

        return redirect()->route('dashboard.bona.projects.index')
                         ->with('success', 'تم تحديث المشروع بنجاح ✅');
    }

    public function destroy(BonaProject $project)
    {
        if ($project->image && File::exists(public_path($project->image))) {
            File::delete(public_path($project->image));
        }

        $project->delete();

        return redirect()->back()->with('success', 'تم حذف المشروع بنجاح 🗑️');
    }
}
