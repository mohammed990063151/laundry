<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    // عرض جميع الغرف (اختياري)
    public function index()
    {
        $rooms = [
            [
                'name' => 'غرفة سوبيريور',
                'slug' => 'superior-room',
                'price' => 214.2,
                'old_price' => 238,
                'discount' => '10%',
                'image' => asset('images/room-main.jpg'),
                'description' => 'غرفه نوم واسعة مجهزة بأثاث فاخر وسرير كينج وتشمل شاشة تلفاز مسطحة وخزانة للملابس وحمام فاخر.',
            ],
            [
                'name' => 'جناح تنفيذي',
                'slug' => 'executive-suite',
                'price' => 349.2,
                'old_price' => 388,
                'discount' => '10%',
                'image' => asset('images/executive-suite.jpg'),
                'description' => 'جناح فاخر مع إطلالة جميلة ومرافق مميزة تشمل صالة ومطبخ صغير.',
            ],
            [
                'name' => 'غرفة ديلوكس',
                'slug' => 'deluxe-room',
                'price' => 184.5,
                'old_price' => 205,
                'discount' => '10%',
                'image' => asset('images/deluxe-room.jpg'),
                'description' => 'غرفة ديلوكس عصرية ومريحة بإطلالة رائعة وخدمة مميزة.',
            ],
        ];

        return view('frontend.rooms.index', compact('rooms'));
    }

    // عرض تفاصيل الغرفة
    public function show($slug)
    {
        $rooms = [
            'superior-room' => [
                'name' => 'غرفة سوبيريور',
                'price' => 214.2,
                'old_price' => 238,
                'discount' => '10%',
                'image' => asset('images/room-main.jpg'),
                'gallery' => [
                    asset('images/room1.jpg'),
                    asset('images/room2.jpg'),
                    asset('images/room3.jpg')
                ],
                'details' => 'غرفه نوم واسعة مجهزة بأثاث فاخر وسرير كينج وتشمل شاشة تلفاز مسطحة وخزانة ملابس وطاولة كوي وحمام فاخر به جميع المستلزمات.',
                'amenities' => ['واي فاي مجاني', 'قهوة وشاي', 'شاشة تلفاز', 'مسبح', 'موقف سيارات', 'صالة رياضية'],
                'related' => [
                    ['name' => 'جناح تنفيذي', 'price' => 349.2, 'old_price' => 388, 'discount' => '10%', 'image' => asset('images/executive-suite.jpg')],
                    ['name' => 'غرفة ديلوكس', 'price' => 184.5, 'old_price' => 205, 'discount' => '10%', 'image' => asset('images/deluxe-room.jpg')],
                ],
            ],
            // يمكنك إضافة غرف أخرى هنا بنفس البنية
        ];

        if (!array_key_exists($slug, $rooms)) {
            abort(404, 'الغرفة غير موجودة');
        }

        $room = $rooms[$slug];

        return view('frontend.rooms.show', compact('room'));
    }
}
