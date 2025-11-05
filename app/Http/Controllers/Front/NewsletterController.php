<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ], [
            'email.required' => 'الرجاء إدخال البريد الإلكتروني.',
            'email.email'    => 'صيغة البريد الإلكتروني غير صحيحة.',
            'email.unique'   => 'هذا البريد مسجل بالفعل في النشرة.',
        ]);

        NewsletterSubscriber::create($data);

        return back()->with('newsletter_success', 'تم اشتراكك في نشرتنا البريدية بنجاح ✅');
    }
}

