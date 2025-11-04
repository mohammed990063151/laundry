@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative text-center text-white">
    <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Booking">

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.8; mix-blend-mode: multiply; filter: contrast(1.2) brightness(0.9);"></div>

    <div class="container position-relative">
        <h1 class="fw-bold display-5" data-aos="fade" data-aos-duration="3000">
            احجز خدمتك الآن
        </h1>
        <p class="mt-3 fs-5" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
            خدمة الغسيل من <strong>بونا</strong> تصلك أينما كنت — نظافة احترافية وسرعة في التنفيذ.
        </p>
    </div>
</div>

<!-- Booking Form Section -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-body-emphasis">نموذج الحجز</h2>
            <p class="text-body-secondary fs-6">املأ النموذج التالي وسيتم التواصل معك لتأكيد الحجز</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                    <form id="bookingForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">الاسم الكامل</label>
                                <input type="text" class="form-control form-control-sm" placeholder="اكتب اسمك" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">رقم الجوال</label>
                                <input type="text" class="form-control form-control-sm" placeholder="05xxxxxxxx" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">المدينة</label>
                                <select class="form-select form-select-sm" required>
                                    <option value="">اختر المدينة</option>
                                    <option>الرياض</option>
                                    <option>جدة</option>
                                    <option>الدمام</option>
                                    <option>الخبر</option>
                                    <option>المدينة المنورة</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">العنوان التفصيلي</label>
                                <input type="text" class="form-control form-control-sm" placeholder="الحي، الشارع، رقم المنزل" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">نوع الخدمة</label>
                                <select class="form-select form-select-sm" required>
                                    <option value="">اختر الخدمة</option>
                                    <option>غسيل وكي</option>
                                    <option>غسيل فقط</option>
                                    <option>تنظيف جاف (Dry Clean)</option>
                                    <option>مفارش وستائر</option>
                                    <option>الملابس الرسمية</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">وقت الاستلام المفضل</label>
                                <input type="datetime-local" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">طريقة الدفع</label>
                                <select class="form-select form-select-sm">
                                    <option>عند الاستلام (COD)</option>
                                    <option>دفع إلكتروني</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">البريد الإلكتروني (اختياري)</label>
                                <input type="email" class="form-control form-control-sm" placeholder="name@email.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold">ملاحظات إضافية</label>
                                <textarea class="form-control form-control-sm" rows="3" placeholder="اكتب ملاحظاتك إن وجدت..."></textarea>
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

        <!-- Quick Contact -->
        <div class="text-center mt-5">
            <p class="text-body-secondary mb-3">هل تحتاج مساعدة؟ تواصل معنا مباشرة 👇</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://wa.me/966500000000" target="_blank" class="btn btn-success text-white fw-semibold px-4">
                    <i class="fab fa-whatsapp me-2"></i> واتساب
                </a>
                <a href="tel:+966500000000" class="btn btn-outline-primary fw-semibold px-4">
                    <i class="fa-solid fa-phone me-2"></i> اتصال مباشر
                </a>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3 text-center">
            <img src="./assets/img/bg/bg10.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" alt="Bona CTA">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.1) brightness(0.85);"></div>

            <div class="px-5">
                <h2 class="fw-bold display-6">راحة بالك تبدأ من هنا</h2>
                <p class="mt-3 fs-5">بونا تقدم لك تجربة غسيل مثالية بخدمة توصيل سريعة ومعقمة.</p>
                <a href="tel:+966500000000" class="btn btn-lg btn-light text-primary mt-3 fw-semibold">
                    اتصل الآن واحجز موعدك
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
