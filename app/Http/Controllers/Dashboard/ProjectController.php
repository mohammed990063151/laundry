<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['image'] = $file->storeAs('dashboard_files/img/projects', $name, 'public_uploads');
        }

        $data['slug'] = Str::slug($data['title'], '-');

        Project::create($data);
        return redirect()->route('dashboard.projects.index')->with('success', 'تم إضافة المشروع بنجاح ✅');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image && Storage::disk('public_uploads')->exists($project->image)) {
                Storage::disk('public_uploads')->delete($project->image);
            }
            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $data['image'] = $file->storeAs('dashboard_files/img/projects', $name, 'public_uploads');
        }

        $data['slug'] = Str::slug($data['title'], '-');
        $project->update($data);

        return redirect()->route('dashboard.projects.index')->with('success', 'تم تحديث المشروع ✅');
    }

    public function destroy(Project $project)
    {
        if ($project->image && Storage::disk('public_uploads')->exists($project->image)) {
            Storage::disk('public_uploads')->delete($project->image);
        }

        $project->delete();
        return back()->with('success', 'تم حذف المشروع 🗑️');
    }
}
