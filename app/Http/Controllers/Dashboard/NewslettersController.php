<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;

class NewslettersController extends Controller
{
    public function index()
    {
        $subscribers = NewsletterSubscriber::latest()->paginate(10);
        return view('admin.newsletter.index', compact('subscribers'));
    }
}

