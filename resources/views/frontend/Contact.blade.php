@extends('frontend.layouts.master')

@section('title', 'تواصل معنا - بونا ')

@section('content')
<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative">
    <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Contact">

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.8; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.9);"></div>

    <div class="position-absolute z-0 top-0 h-100 w-100">
        <div class="container h-100 d-flex align-items-center">
            <div class="max-w-2xl mx-auto text-center text-xl-start">
                <h1 class="m-0 mt-7 text-white fw-bold display-5" data-aos="fade" data-aos-duration="3000">
                    تواصل معنا
                </h1>
                <p class="m-0 mt-4 text-white fs-5" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                    يسعدنا تواصلك معنا في أي وقت — فريق <strong>بونا</strong> جاهز لخدمتك على مدار اليوم.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Information -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row gy-5 gx-lg-5 align-items-start">

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="bg-body-tertiary p-4 p-md-5 rounded-4 shadow-sm">
                    <h2 class="fw-bold text-body-emphasis mb-3">أرسل لنا رسالة</h2>
                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">الاسم الكامل</label>
                                <input type="text" class="form-control form-control-sm" placeholder="اكتب اسمك" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">البريد الإلكتروني</label>
                                <input type="email" class="form-control form-control-sm" placeholder="name@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">رقم الجوال</label>
                                <input type="text" class="form-control form-control-sm" placeholder="05xxxxxxxx" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">الموضوع</label>
                                <input type="text" class="form-control form-control-sm" placeholder="موضوع الرسالة" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold">الرسالة</label>
                                <textarea class="form-control form-control-sm" rows="4" placeholder="اكتب رسالتك هنا..." required></textarea>
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary px-4 py-2 text-white fw-semibold">
                                إرسال الرسالة
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Details -->
            <div class="col-12 col-lg-6">
                <div class="ps-lg-4">
                    <h2 class="fw-bold text-body-emphasis mb-3">معلومات التواصل</h2>
                    <p class="text-body-secondary mb-4">
                        يمكنك التواصل معنا عبر القنوات التالية أو زيارتنا في أحد فروعنا.
                    </p>

                    <ul class="list-unstyled text-body-secondary fs-6">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fa-solid fa-location-dot text-primary me-2"></i>
                            <span>الرياض، المملكة العربية السعودية</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fa-solid fa-phone text-primary me-2"></i>
                            <span><a href="tel:+966500000000" class="text-decoration-none text-body-secondary">+966 50 000 0000</a></span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fa-solid fa-envelope text-primary me-2"></i>
                            <span><a href="mailto:info@bona.sa" class="text-decoration-none text-body-secondary">info@bona.sa</a></span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fa-solid fa-clock text-primary me-2"></i>
                            <span>من السبت إلى الخميس - 9 صباحًا حتى 10 مساءً</span>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <h5 class="fw-bold text-body-emphasis mb-2">تابعنا على:</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-primary fs-5"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary fs-5"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-primary fs-5"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-primary fs-5"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Map -->
        <div class="mt-5 rounded-4 overflow-hidden shadow-sm ratio ratio-16x9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.801504002278!2d46.67529541500297!3d24.713551384118534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f041bb2df7b09%3A0x45d2b8efb7ce4eb4!2sRiyadh!5e0!3m2!1sen!2ssa!4v1665497445925!5m2!1sen!2ssa"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
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
                <h2 class="fw-bold display-6">جاهزون لخدمتك أينما كنت</h2>
                <p class="mt-3 fs-5">احجز خدمتك الآن وتمتع بتوصيل سريع وغسيل احترافي من بونا.</p>
                <a href="{{ route('rooms.show') }}" class="btn btn-lg btn-primary text-white mt-3">احجز الآن</a>
            </div>
        </div>
    </div>
</div>

@endsection
