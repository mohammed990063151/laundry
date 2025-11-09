<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\About;
use App\Models\BonaPartner;
use App\Models\Project;
use App\Models\BonaService;
use App\Models\BonaHeroSection;

class HomeController extends Controller
{
  public function index()
{
    $hero = \App\Models\BonaHeroSection::first();
    $services = \App\Models\BonaService::orderBy('sort_order')->get();
    $projects = Project::latest()->get();
    $partners = \App\Models\BonaPartner::all();
    $home = \App\Models\BonaServicesSetting::first();
    //   $services = \App\Models\BonaService::first();
    return view('frontend.home', compact('hero','services','projects','partners','home'));
}



}
