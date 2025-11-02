<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSetting;
use App\Models\CompanyBranch;
use App\Models\ContactMessage;
class PagContactController extends Controller
{
public function index()
{
    $settings = ContactSetting::first();
    $branches = CompanyBranch::all();

    return view('frontend.contact', compact('settings','branches'));
}

public function send(Request $request)
{
    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required',
    ]);

    ContactMessage::create($request->all());

    return back()->with('success','✅ تم استلام رسالتك بنجاح');
}

}
