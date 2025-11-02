<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        $counter = Counter::first();
        return view('admin.counters.index', compact('counter'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title1' => 'required',
            'count1' => 'required|numeric',
            'title2' => 'required',
            'count2' => 'required|numeric',
            'title3' => 'required',
            'count3' => 'required|numeric',
            'title4' => 'required',
            'count4' => 'required|numeric',
        ]);

        $counter = Counter::first();
        $counter->update($data);

        return back()->with('success','✅ تم تحديث الإحصائيات بنجاح');
    }
}
