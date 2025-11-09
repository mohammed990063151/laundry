<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaTestimonial;

class BonaTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = BonaTestimonial::orderBy('sort_order')->get();
        return view('admin.bona_testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.bona_testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required',
            'city'       => 'nullable',
            'content'    => 'required',
            'sort_order' => 'nullable|integer',
        ]);

        BonaTestimonial::create($data);

        return redirect()->route('dashboard.bona-testimonials.index')->with('success','تمت إضافة الرأي ✅');
    }

    public function edit(BonaTestimonial $bona_testimonial)
    {
        return view('admin.bona_testimonials.edit', ['testimonial' => $bona_testimonial]);
    }

    public function update(Request $request, BonaTestimonial $bona_testimonial)
    {
        $data = $request->validate([
            'name'       => 'required',
            'city'       => 'nullable',
            'content'    => 'required',
            'sort_order' => 'nullable|integer',
        ]);

        $bona_testimonial->update($data);

        return redirect()->route('dashboard.bona-testimonials.index')->with('success','تم تحديث الرأي ✅');
    }

    public function destroy(BonaTestimonial $bona_testimonial)
    {
        $bona_testimonial->delete();
        return back()->with('success','تم حذف الرأي ❌');
    }
}
