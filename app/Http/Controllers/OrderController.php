<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // return $request->all();
        $data = $request->validate([
            'full_name'      => 'required|string|max:255',
            'phone'          => 'required|string|max:20',
            'email'          => 'nullable|email|max:255',
            'city'           => 'required|string|max:100',
            'address'        => 'required|string|max:255',
            'service_type'   => 'required|string|max:100',
            'payment_method' => 'required|string|max:50',
            'pickup_time'    => 'required|date',
            'notes'          => 'nullable|string',
        ]);

        Order::create($data);

        return back()->with('success', '✅ تم إرسال طلبك بنجاح!');
    }

    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }
}
