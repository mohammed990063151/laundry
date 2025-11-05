<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BonaMessage;

class BonaFormController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        BonaMessage::create($request->all());
//  return $request->all();
        return back()->with('success', 'تم إرسال الرسالة بنجاح ✅');
    }
}

