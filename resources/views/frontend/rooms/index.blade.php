@extends('frontend.layouts.master')
@section('title', ' الصفحة احجز خدمتك - بونا ')
@section('content')

<!-- 🌟 Hero Section -->
<section class="position-relative text-center text-white overflow-hidden">
    <img src="{{ asset('assets/img/bg/bg1.jpg') }}"
         class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
         alt="Bona Booking">

    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark"
         style="opacity: 0.8; mix-blend-mode: multiply; filter: contrast(1.2) brightness(0.9);"></div>

    <div class="container position-relative py-7 py-md-9 py-xl-10">
        <h1 class="fw-bold display-5" data-aos="fade" data-aos-duration="3000">احجز خدمتك الآن</h1>
        <p class="mt-3 fs-5 mx-auto" style="max-width: 650px;" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
            خدمة الغسيل من <strong>بونا</strong> تصلك أينما كنت — نظافة احترافية وسرعة في التنفيذ.
        </p>
    </div>
</section>

<!-- 🧺 Booking Form Section -->
<section class="bg-body-tertiary py-7 py-md-8 py-xl-9">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-body-emphasis">نموذج الحجز</h2>
            <p class="text-body-secondary fs-6">املأ النموذج التالي وسيتم التواصل معك لتأكيد الحجز</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">

                    @if(session('success'))
                        <div class="alert alert-success text-center mb-4">{{ session('success') }}</div>
                    @endif

                   <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">الاسم الكامل</label>
                                    <input type="text" name="full_name" class="form-control form-control-sm"
                                        placeholder="اكتب اسمك" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">رقم الجوال</label>
                                    <input type="text" name="phone" class="form-control form-control-sm"
                                        placeholder="05xxxxxxxx" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">المدينة</label>
                                    <select class="form-select form-select-sm" name="city" required>
                                        <option value="">اختر المدينة</option>
                                        <option value="الرياض">الرياض</option>
                                        <option value="جدة">جدة</option>
                                        <option value="الدمام">الدمام</option>
                                        <option value="الخبر">الخبر</option>
                                        <option value="المدينة المنورة">المدينة المنورة</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">العنوان التفصيلي</label>
                                    <input type="text" name="address" class="form-control form-control-sm"
                                        placeholder="الحي، الشارع، رقم المنزل" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">نوع الخدمة</label>
                                    <select class="form-select form-select-sm" name="service_type" required>
                                        <option value="">اختر الخدمة</option>
                                        <option value="غسيل وكي">غسيل وكي</option>
                                        <option value="غسيل فقط">غسيل فقط</option>
                                        <option value="تنظيف جاف (Dry Clean)">تنظيف جاف (Dry Clean)</option>
                                        <option value="مفارش وستائر">مفارش وستائر</option>
                                        <option value="الملابس الرسمية">الملابس الرسمية</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">وقت الاستلام المفضل</label>
                                    <input type="datetime-local" name="pickup_time" class="form-control form-control-sm"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">طريقة الدفع</label>
                                    <select class="form-select form-select-sm" name="payment_method">
                                        <option value="عند الاستلام (COD)">عند الاستلام (COD)</option>
                                        <option value="دفع إلكتروني">دفع إلكتروني</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">البريد الإلكتروني (اختياري)</label>
                                    <input type="email" name="email" class="form-control form-control-sm"
                                        placeholder="name@email.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">ملاحظات إضافية</label>
                                    <textarea class="form-control form-control-sm" name="notes" rows="3" placeholder="اكتب ملاحظاتك إن وجدت..."></textarea>
                                </div>
                            </div>

                            <div class="mt-4 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-2 text-white fw-semibold">
                                    تأكيد الحجز
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>

        <!-- 📞 Quick Contact -->
        <div class="text-center mt-5">
            <p class="text-body-secondary mb-3">هل تحتاج مساعدة؟ تواصل معنا مباشرة 👇</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="https://wa.me/{{ $setting->phone }}" target="_blank" class="btn btn-success fw-semibold px-4">
                    <i class="fab fa-whatsapp me-2"></i> واتساب
                </a>
                <a href="tel:{{ $setting->phone }}" class="btn btn-outline-primary fw-semibold px-4">
                    <i class="fa-solid fa-phone me-2"></i> اتصال مباشر
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 💧 CTA Section -->
<section class="py-8 py-md-9">
    <div class="container">
        <div class="position-relative text-white text-center rounded-4 overflow-hidden p-5 p-md-7 shadow-lg">
            <img src="{{ asset('assets/img/bg/bg10.jpg') }}"
                 class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                 alt="Bona CTA">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>

            <div class="position-relative px-3 px-md-5">
                <h2 class="fw-bold display-6 mb-3">راحة بالك تبدأ من هنا</h2>
                <p class="fs-5 mb-4">بونا تقدم لك تجربة غسيل مثالية بخدمة توصيل سريعة ومعقمة.</p>
                <a href="tel:{{ $setting->phone }}" class="btn btn-light text-primary btn-lg fw-semibold">
                    اتصل الآن واحجز موعدك
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
