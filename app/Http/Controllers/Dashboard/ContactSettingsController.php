<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSetting;

class ContactSettingsController extends Controller
{
    public function edit()
    {
        $settinges = ContactSetting::first();
        // return $setting;
        return view('admin.contact.settings', compact('settinges'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title'     => 'nullable|string',
            'subtitle'  => 'nullable|string',
            'email'     => 'nullable|string',
            'phone'     => 'nullable|string',
            'whatsapp'  => 'nullable|string',
            'address'   => 'nullable|string',
            'map_embed' => 'nullable|string',
        ]);

        ContactSetting::updateOrCreate(['id'=>1], $data);

        return back()->with('success','✔ تم تحديث الإعدادات بنجاح');
    }
}
