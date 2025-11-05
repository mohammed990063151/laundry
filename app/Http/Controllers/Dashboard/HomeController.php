<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BonaMessage;     // الرسائل الواردة من نموذج التواصل
use App\Models\Order;           // الطلبات
use App\Models\CompanyBranch;          // الفروع
use App\Models\User;            // العملاء أو المستخدمين
use App\Models\Service;         // الخدمات

class HomeController extends Controller
{
    public function index()
    {
        // عدد الرسائل
        $messagesCount = BonaMessage::count();

        // عدد الطلبات
        $ordersCount = Order::count();

        // عدد الفروع
        $branchesCount = CompanyBranch::count();

        // عدد العملاء (يمكنك تخصيص Role معين لاحقًا)
        $customersCount = User::count();

        // عدد الخدمات
        $servicesCount = Service::count();

        // آخر الرسائل (5 فقط)
        $lastMessages = BonaMessage::latest()->take(5)->get();

        return view('admin.dashboard.home', compact(
            'messagesCount',
            'ordersCount',
            'branchesCount',
            'customersCount',
            'servicesCount',
            'lastMessages'
        ));
    }
}
