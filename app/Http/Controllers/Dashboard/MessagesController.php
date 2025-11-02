<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class MessagesController extends Controller
{
    public function inbox()
    {
        $msgs = ContactMessage::latest()->paginate(15);
        return view('admin.messages.index', compact('msgs'));
    }

    public function show(ContactMessage $message)
    {
        $message->update(['is_seen' => true]);
        return view('admin.messages.show', compact('message'));
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();
        return back()->with('success','🗑️ تم حذف الرسالة بنجاح');
    }
}
