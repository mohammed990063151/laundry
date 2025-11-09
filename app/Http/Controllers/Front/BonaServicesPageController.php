<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BonaServicesSetting;
use App\Models\BonaService;
use App\Models\BonaTestimonial;
use App\Models\BonaPartner;

class BonaServicesPageController extends Controller
{
    public function index()
    {
        $settings     = BonaServicesSetting::first();
        $services     = BonaService::orderBy('sort_order')->get();
        $testimonials = BonaTestimonial::orderBy('sort_order')->get();
        $partners     = BonaPartner::latest()->get(); // من جدول الشركاء الذي عملناه

        return view('frontend.our_services', compact(
            'settings',
            'services',
            'testimonials',
            'partners'
        ));
    }
}
