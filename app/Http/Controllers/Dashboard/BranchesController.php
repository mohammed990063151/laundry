<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyBranch;
use Illuminate\Support\Facades\Storage;

class BranchesController extends Controller
{
    public function index()
    {
        $branches = CompanyBranch::latest()->paginate(12);
        return view('admin.branches.index', compact('branches'));
    }

    public function create()
    {
        return view('admin.branches.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string',
            'city'=>'nullable|string',
            'phone'=>'nullable|string',
            'email'=>'nullable|string',
            'map_link'=>'nullable|string',
            'image'=>'nullable|image',
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('branches','public');
        }

        CompanyBranch::create($data);

        return redirect()->route('dashboard.branches.index')
            ->with('success','✅ تم إضافة الفرع بنجاح');
    }

    public function edit(CompanyBranch $branch)
    {
        return view('admin.branches.edit', compact('branch'));
    }

    public function update(Request $request, CompanyBranch $branch)
    {
        $data = $request->validate([
            'name'=>'required|string',
            'city'=>'nullable|string',
            'phone'=>'nullable|string',
            'email'=>'nullable|string',
            'map_link'=>'nullable|string',
            'image'=>'nullable|image',
        ]);

        if($request->hasFile('image'))
        {
            if($branch->image && Storage::disk('public')->exists($branch->image))
            {
                Storage::disk('public')->delete($branch->image);
            }

            $data['image'] = $request->file('image')->store('branches','public');
        }

        $branch->update($data);

        return redirect()->route('dashboard.branches.index')->with('success','✅ تم تحديث الفرع');
    }

    public function destroy(CompanyBranch $branch)
    {
        if($branch->image && Storage::disk('public')->exists($branch->image)){
            Storage::disk('public')->delete($branch->image);
        }

        $branch->delete();
        return back()->with('success','🗑️ تم حذف الفرع بنجاح');
    }
}
