<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BonaProject;

class ProjectFrontendController extends Controller
{
    public function index()
    {
        $projects = BonaProject::orderBy('sort_order')->latest()->get();
        return view('frontend.projects.index', compact('projects'));
    }

    public function show(string $slug)
    {

        $project = BonaProject::where('slug', $slug)->orderBy('sort_order')
            ->with('images')
            ->firstOrFail();
            $related = BonaProject::where('id', '!=', $project->id)
                      ->inRandomOrder()
                      ->limit(4)
                      ->get();
        return view('frontend.projects.show', compact('project', 'related'));
    }
}
