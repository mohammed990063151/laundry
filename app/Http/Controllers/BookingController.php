<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // حفظ الطلب من الفورم
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name'      => 'required|string|max:255',
            'phone'          => 'required|string|max:20',
            'city'           => 'required|string|max:100',
            'address'        => 'required|string|max:255',
            'service_type'   => 'required|string|max:100',
            'pickup_time'    => 'required|date',
            'payment_method' => 'required|string|max:50',
            'email'          => 'nullable|email|max:255',
            'notes'          => 'nullable|string',
        ]);

        Booking::create($data);

        return back()->with('success', '✅ تم إرسال الحجز بنجاح!');
    }

    // عرض الطلبات في لوحة التحكم
    public function index()
    {
        $bookings = Booking::latest()->paginate(10);
        return view('admin.bookings.index', compact('bookings'));
    }
}
