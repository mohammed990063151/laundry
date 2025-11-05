<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\About;
use App\Models\WhyUs;
use App\Models\GalleryItem;
use App\Models\GallerySetting;
use App\Models\Pagservice;

class HomeController extends Controller
{
    public function index()
    {
        $section = Section::first();
        // return      $section ;
        $about = About::first();
        $whyus = WhyUs::first();
        $gallery = GalleryItem::latest()->get();
    $settinggallery = GallerySetting::first();
        $services = \App\Models\Service::first();
         $counter = \App\Models\Counter::first();
        return view('frontend.home', compact('section', 'about', 'whyus', 'gallery', 'settinggallery','services','counter'));
    }


}
