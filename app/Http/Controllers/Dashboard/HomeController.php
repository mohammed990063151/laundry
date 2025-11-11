<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BonaMessage;
use App\Models\Order;
use App\Models\Booking;
use App\Models\User;
use App\Models\BonaService;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        // إعدادات الموقع
        $stteing = Setting::first();

        // الإحصائيات العامة
        $messagesCount  = BonaMessage::count();
        $ordersCount    = Order::count();
        $BookingCount   = Booking::count();
        $customersCount = User::count();
        $servicesCount  = BonaService::count();
        $lastMessages   = BonaMessage::latest()->take(5)->get();

        // 🔔 الطلبات والحجوزات غير المقروءة فقط (is_seen = 0)
        $newOrders = Order::where('is_seen', false)->latest()->get();
        $newBookings = Booking::where('is_seen', false)->latest()->get();
        $newmessages = BonaMessage::where('is_seen', false)->latest()->get();

        $totalNotifications = $newOrders->count() + $newBookings->count() + $newmessages->count();

        // ✅ عند دخول المستخدم الصفحة: نعتبرها مقروءة ونحدثها فورًا
        // if ($totalNotifications > 0) {
        //     Order::where('is_seen', false)->update(['is_seen' => true]);
        //     Booking::where('is_seen', false)->update(['is_seen' => true]);
        // }

        return view('admin.dashboard.home', compact(
            'stteing',
            'messagesCount',
            'ordersCount',
            'BookingCount',
            'customersCount',
            'servicesCount',
            'lastMessages',
            'newOrders',
            'newBookings',
            'newmessages',
            'totalNotifications'
        ));
    }
}
