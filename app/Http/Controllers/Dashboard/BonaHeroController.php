<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BonaHeroSection;
use Illuminate\Http\Request;

class BonaHeroController extends Controller
{
    public function index()
    {
        $hero = BonaHeroSection::first();
        return view('admin.bona.hero.index', compact('hero'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'nullable',
            'description' => 'nullable',
            'video_url' => 'nullable',
            'background_video' => 'nullable|mimes:mp4,webm,ogg|max:102400'
        ]);

        $hero = BonaHeroSection::first() ?? new BonaHeroSection();

        if ($request->hasFile('background_video')) {
            $data['background_video'] = $request->background_video->store('uploads/bona/hero','public');
        }

        $hero->updateOrCreate(['id' => $hero->id ?? null], $data);

        return back()->with('success', 'تم تحديث بيانات الهيرو بنجاح');
    }
}

