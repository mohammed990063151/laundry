<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Pagservice;
use App\Models\CompanyBranch;
use App\Models\Testimonial;
use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $messagesCount   = ContactMessage::count();
        $servicesCount   = Pagservice::count();
        $branchesCount   = CompanyBranch::count();
        $testimonialsCount = Testimonial::count();
        $sectionsCount   = Section::count();

        $lastMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard.home', compact(
            'messagesCount',
            'servicesCount',
            'branchesCount',
            'testimonialsCount',
            'sectionsCount',
            'lastMessages'
        ));
    }
}
