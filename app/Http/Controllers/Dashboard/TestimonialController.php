<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $items = Testimonial::latest()->paginate(15);
        return view('admin.testimonials.index', compact('items'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'review'=>'required',
            'stars'=>'required|integer|min:1|max:5',
            'avatar'=>'nullable|image'
        ]);

        if($request->hasFile('avatar')){
            $data['avatar'] = $request->file('avatar')->store('avatars','public');
        }

        Testimonial::create($data);

        return back()->with('success','✅ تم إضافة رأي العميل بنجاح');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name'=>'required',
            'review'=>'required',
            'stars'=>'required|integer|min:1|max:5',
            'avatar'=>'nullable|image'
        ]);

        if($request->hasFile('avatar')){
            $data['avatar'] = $request->file('avatar')->store('avatars','public');
        }

        $testimonial->update($data);

        return back()->with('success','✅ تم تحديث البيانات');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success','🗑️ تم حذف الرأي');
    }
}

