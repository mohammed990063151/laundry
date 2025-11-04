@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative">
    <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Order">

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.8; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.9);"></div>

    <div class="position-absolute z-0 top-0 h-100 w-100">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="m-0 text-white fw-bold display-5" data-aos="fade" data-aos-duration="3000">
                    اطلب الآن
                </h1>
                <p class="m-0 mt-4 text-white fs-5" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                    اطلب خدمة الغسيل من <strong>بونا</strong> بضغطة زر، وسيصل مندوبنا إليك في أسرع وقت.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Order Form Section -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="bg-body-tertiary p-4 p-md-5 rounded-4 shadow-sm">
                    <h2 class="fw-bold text-body-emphasis mb-3 text-center">نموذج طلب الخدمة</h2>
                    <p class="text-body-secondary text-center mb-4">
                        الرجاء تعبئة البيانات التالية ليتم التواصل معك لتأكيد الطلب واستلام الملابس.
                    </p>

                    <form id="orderForm" novalidate>
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
                                <label class="form-label small fw-semibold">البريد الإلكتروني</label>
                                <input type="email" class="form-control form-control-sm" placeholder="name@email.com">
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
                                <label class="form-label small fw-semibold">العنوان بالتفصيل</label>
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
                                    <option>ملابس رسمية</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">طريقة الدفع</label>
                                <select class="form-select form-select-sm" required>
                                    <option>عند الاستلام (COD)</option>
                                    <option>دفع إلكتروني</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">وقت الاستلام المفضل</label>
                                <input type="datetime-local" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold">ملاحظات إضافية</label>
                                <textarea class="form-control form-control-sm" rows="3" placeholder="اكتب أي ملاحظات هنا..."></textarea>
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary px-5 py-2 text-white fw-semibold">
                                تأكيد الطلب
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3">
            <img src="./assets/img/bg/bg10.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" alt="Bona CTA">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.1) brightness(0.85);"></div>

            <div class="px-5 text-center">
                <h2 class="fw-bold display-6">استلم راحتك في وقتك</h2>
                <p class="mt-3 fs-5">نحن في بونا نوفر لك تجربة غسيل احترافية وسريعة بخدمة توصيل من الباب إلى الباب.</p>
                <a href="tel:+966500000000" class="btn btn-lg btn-light text-primary mt-3 fw-semibold">
                    اتصل الآن 📞
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
