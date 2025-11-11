<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Dashboard\BonaMessageController;
use App\Http\Controllers\Dashboard\BonaServiceController;
use App\Http\Controllers\Dashboard\BonaPartnerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Front\NewsletterController;
use App\Http\Controllers\Dashboard\NewslettersController;
use App\Http\Controllers\Dashboard\BonaServicesSettingsController;
use App\Http\Controllers\Dashboard\BonaTestimonialController;
use App\Http\Controllers\Front\BonaServicesPageController;
use App\Http\Controllers\Dashboard\BonaAboutController;
// صفحة تسجيل الدخول المخصصة
Route::get('/custom-login', function () {
    return view('auth.custom-login');
})->name('custom-login');

// // الصفحة الرئيسية

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

// // تعطيل تسجيل المستخدمين الجدد

Auth::routes(['register' => false]);

// // صفحة الاتصال

Route::get('/contact', function () {
    return view('frontend.Contact');
})->name('contact');

// // صفحة من نحن

Route::get('/about-us', function () {
    $about = \App\Models\BonaAboutSection::first();
    $partners  = \App\Models\BonaPartner::latest()->get();
    return view('frontend.about-us', compact('about', 'partners'));
})->name('frontend.about-us');

// // صفحة الغرف

Route::get('/order', function () {
    return view('frontend.allrooms');
})->name('frontend.rooms');

// // صفحة جميع المشاريع

Route::get('/All-Projects', function () {
    $projects = \App\Models\BonaProject::orderBy('sort_order')->get();
    return view('frontend.book-now', compact('projects'));
    // return view('frontend.book-now');
})->name('book.now');

// // صفحة حجز الخدمة

Route::get('/Book_Your_Service_Now', function () {
    return view('frontend.rooms.index');
})->name('rooms.show');

// // صفحة سياسة الخصوصية
Route::get('/privacy', function () {
    return view('frontend.rooms.show');
})->name('privacy');


// // مسارات إدارة مشاريع بونا في لوحة التحكم
Route::prefix('dashboard/bona/projects')->name('dashboard.bona.projects.')->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\BonaProjectController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\Dashboard\BonaProjectController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\Dashboard\BonaProjectController::class, 'store'])->name('store');
    Route::get('/{project}/edit', [App\Http\Controllers\Dashboard\BonaProjectController::class, 'edit'])->name('edit');
    Route::put('/{project}/update', [App\Http\Controllers\Dashboard\BonaProjectController::class, 'update'])->name('update');
    Route::delete('/{project}/delete', [App\Http\Controllers\Dashboard\BonaProjectController::class, 'destroy'])->name('delete');
});

// // مسار حفظ الطلبات
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

// // مسار حفظ الحجوزات
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

// // مسار حفظ نموذج بونا
Route::post('/bona-form', [App\Http\Controllers\Front\BonaFormController::class, 'store'])
    ->name('frontend.bonaform.store');

// // مسار الاشتراك في النشرة الإخبارية
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])
    ->name('newsletter.subscribe');

//     // صفحة خدمات بونا
Route::get('/bona-services', [BonaServicesPageController::class, 'index'])->name('bona.services');


// // مسارات قسم من نحن في لوحة التحكم
Route::prefix('dashboard/bona/about')->name('dashboard.bona.about.')->group(function () {
    Route::get('/edit', [BonaAboutController::class, 'edit'])->name('edit');
    Route::post('/update', [BonaAboutController::class, 'update'])->name('update');
});

// // مسارات إدارة خدمات بونا في لوحة التحكم
Route::prefix('dashboard/bona/services')->name('dashboard.bona.services.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Dashboard\BonaServiceController::class, 'index'])->name('index');
    Route::get('/create', [\App\Http\Controllers\Dashboard\BonaServiceController::class, 'create'])->name('create');
    Route::post('/store', [\App\Http\Controllers\Dashboard\BonaServiceController::class, 'store'])->name('store');
    Route::get('/{service}/edit', [\App\Http\Controllers\Dashboard\BonaServiceController::class, 'edit'])->name('edit');
    Route::put('/{service}/update', [\App\Http\Controllers\Dashboard\BonaServiceController::class, 'update'])->name('update');
    Route::delete('/{service}/delete', [\App\Http\Controllers\Dashboard\BonaServiceController::class, 'destroy'])->name('delete');
});

//  // Auth::routes();
// // مسارات لوحة التحكم
Route::middleware(['auth', 'web'])->prefix('dashboard')->name('dashboard.')->group(function () {


    Route::get('bona-services/settings', [BonaServicesSettingsController::class, 'index'])
        ->name('bona-services-settings.index');
    Route::put('bona-services/settings', [BonaServicesSettingsController::class, 'update'])
        ->name('bona-services-settings.update');

    Route::resource('bona-services', BonaServiceController::class)->names('bona-services');

    Route::resource('partners', BonaPartnerController::class);

    Route::get('/index', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])
        ->name('home');

    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
    Route::get('/orders', [OrderController::class, 'index'])
        ->name('orders');


//     // للوحة التحكم
    Route::get('bookings', [BookingController::class, 'index'])
        ->name('bookings');

    Route::get('/bona-index', [BonaMessageController::class, 'index'])
        ->name('bona-messages.index');



    Route::get('/newsletter', [NewslettersController::class, 'index'])->name('newsletter.index');

});
