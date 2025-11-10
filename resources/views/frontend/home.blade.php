@extends('frontend.layouts.master')

@section('content')

    <!-- ✅ BONA HERO SECTION -->
    <div class="overflow-hidden position-relative" style="height: 100vh;">

        <!-- خلفية الفيديو -->
        {{-- <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover">
        {{-- <source src="{{ asset('img/main.mp4') }}" type="video/mp4"> --}
            <source src="{{ asset($home->hero_background) }}" type="video/mp4">
        متصفحك لا يدعم تشغيل الفيديو.
    </video> --}}
        @if ($home && $home->hero_background)
            @php
                // استخرج الامتداد
                $ext = strtolower(pathinfo($home->hero_background, PATHINFO_EXTENSION));
                $isVideo = in_array($ext, ['mp4', 'webm', 'mov']);
            @endphp

            @if ($isVideo)
                <!-- 🎥 فيديو خلفية -->
                <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover">
                    <source src="{{ asset($home->hero_background ?? 'img/main.mp4') }}" type="video/{{ $ext }}">
                    متصفحك لا يدعم تشغيل الفيديو.
                </video>
            @else
                <!-- 🖼️ صورة خلفية -->
                <img src="{{ asset($home->hero_background ?? 'assets/css/font/Inter-italic.var.woff2') }}" alt="Hero Background"
                    class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover">
            @endif
        @endif


        <!-- طبقة تعتيم -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: rgba(0,0,0,0.6); mix-blend-mode: multiply;"></div>

        <!-- المحتوى -->
        <div class="container position-relative text-white h-100 d-flex align-items-center">
            <div class="row align-items-center w-100">
                <div class="col-12 col-xl-8">
                    <div class="py-5 py-md-7 py-xl-8">
                        <div class="text-center text-xl-start">
                            <h1 class="fw-bold display-4 mb-4" style="color: #4AC1E0;" data-aos="fade-up"
                                data-aos-duration="1500">
                                {{-- Clean Life --}}{{ $home->hero_title  ?? 'Clean Life'}}
                                <span style="color: #fff;">with BONA</span>
                            </h1>
                            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                                style="max-width:600px;">
                                {{-- شبكة مغاسل مركزية مؤتمتة في الرياض تقدم خدمات الغسيل الذكي، التوصيل المنزلي،
                            والخزائن الذكية بتقنيات حديثة تجمع بين النظافة والفخامة. --}}
                                {!! $home->hero_subtitle ?? 'شبكة مغاسل مركزية مؤتمتة في الرياض تقدم خدمات الغسيل الذكي، التوصيل المنزلي، والخزائن الذكية بتقنيات حديثة تجمع بين النظافة والفخامة.' !!}
                            </p>
                            <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-xl-start">
                                <a href="{{ route('frontend.rooms') }}" class="btn btn-lg text-white fw-semibold shadow"
                                    style="background-color:#1226AA; border-radius:12px;" data-aos="fade-up"
                                    data-aos-delay="300">
                                    اطلب الآن
                                </a>
                                <a href="{{ route('frontend.our-services') }}" class="btn btn-lg fw-semibold"
                                    style="border:2px solid #4AC1E0; color:#4AC1E0; border-radius:12px;" data-aos="fade-up"
                                    data-aos-delay="400">
                                    تعرف على خدماتنا
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="pt-3 pt-md-4 pt-xl-12 pb-2 pb-md-3 pb-xl-6">
                        <!-- Button trigger modal -->
                        <a class="video-play-button video-btn-modal position-relative" href="javascript:;"
                            data-bs-toggle="modal" data-bs-target="#videoModal"
                            data-bs-src="https://www.youtube.com/watch?v=MNOXcYcvQcQ">
                            <span class="top-50 start-50 translate-middle"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="ratio ratio-16x9">
                    <iframe id="videoFrame" src="" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal to embed vidoes!! -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: 0.75rem;">
                <div class="modal-header border-0 p-0">
                    <button type="button"
                        class="btn-close bg-white border position-absolute top-0 end-0 translate-middle me-n3 me-sm-n5 mt-n4 rounded-circle p-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item iframeVideo" style="border-radius: 0.75rem;"
                            allow="autoplay"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <!-- العنوان الرئيسي -->
            <div class="mx-auto text-center" style="max-width: 700px;">
                <h2 class="m-0 text-uppercase fw-semibold" style="color: #4AC1E0;">
                    خدماتنا
                </h2>
                <p class="m-0 mt-2 fw-bold display-6" style="color: #1226AA;">
                    حلول غسيل متكاملة تجمع بين النظافة والفخامة
                </p>
                <p class="m-0 mt-4 text-muted fs-5">
                    نقدم في <strong>بونا Bona</strong> خدمات غسيل احترافية مؤتمتة بالكامل باستخدام تقنيات ذكية وصديقة للبيئة
                    تضمن أعلى معايير النظافة والجودة.
                </p>
            </div>


            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 gy-5 gx-xl-4 mt-5 justify-content-center">
                @foreach ($services as $service)
                    <div class="col" data-aos="fade-up">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="{{ asset($service->image ?? 'assets/css/font/Inter-italic.var.woff2') }}" class="object-fit-cover rounded-top-3"
                                    alt="{{ $service->title ?? 'Service Image' }}">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="fw-bold text-dark mt-3">{{ $service->subtitle ?? $service->title  }}</h3>
                                <p class="text-muted mt-2">{!! $service->description ?? '' !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <!-- زر -->
            <div class="text-center pt-7">
                <a href="{{ route('rooms.show') }}" class="btn btn-lg text-white fw-semibold"
                    style="background-color: #1226AA; border-radius: 12px;">
                    احجز خدمتك الآن
                    <span class="bi bi-arrow-left-short ms-1"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <!-- النص -->
                <div class="col-12 col-xl-5 order-last order-xl-first">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 fw-semibold" style="color: #4AC1E0;">
                            {{-- من نحن --}}
                            {{ $home->whyus_badge  ?? 'من نحن' }}
                        </h2>
                        <p class="m-0 mt-2 fw-bold display-6" style="color: #1226AA;">
                            {{-- تجربة غسيل فاخرة تجمع بين النظافة والتقنية --}}
                            {!! $home->whyus_title ?? 'تجربة غسيل فاخرة تجمع بين النظافة والتقنية' !!}
                        </p>
                        <p class="m-0 mt-4 text-muted fs-5">
                            {{-- <strong>بونا Bona Laundry</strong> هي شبكة مغاسل مركزية مؤتمتة بالكامل في <strong>الرياض – المملكة العربية السعودية</strong>،
                        تقدم خدمات غسيل وكي احترافية للملابس، الأحذية، والمفروشات،
                        مع حلول ذكية تشمل <strong>التوصيل المنزلي والخزائن الذكية</strong>. --}}
                            {{ $home->whyus_text ?? '<strong>بونا Bona Laundry</strong> هي شبكة مغاسل مركزية مؤتمتة بالكامل في <strong>الرياض – المملكة العربية السعودية</strong>، تقدم خدمات غسيل وكي احترافية للملابس، الأحذية، والمفروشات، مع حلول ذكية تشمل <strong>التوصيل المنزلي والخزائن الذكية</strong>.' }}
                        </p>
                        <p class="m-0 mt-3 text-muted fs-5">
                            {{-- نعتمد في بونا على أنظمة رقمية متطورة ومواد صديقة للبيئة لضمان نظافة مثالية
                        وجودة عالية تلائم أسلوب الحياة العصري، مع التزامنا الكامل بمعايير الفخامة والثقة. --}}
                            {{-- {{ $home->whyus_text2 }} --}}
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('frontend.our-services') }}"
                                class="icon-link icon-link-hover text-decoration-none fw-bold" style="color: #1226AA;">
                                اكتشف خدماتنا
                                <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                                <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- الصورة الجانبية -->
                <div class="col-12 col-xl-6">
                    <div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="2000">
                            {{-- <img src="{{ asset('assets/img/bg/bg2.jpg') }}" --}}
                            {{-- class="object-fit-cover rounded-3 shadow" --}}
                            <img src="{{ asset($home->whyus_image ?? 'assets/css/font/Inter-italic.var.woff2') }}" alt="عن بونا" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <!-- صورة كبيرة أسفل النص -->
            <div class="ratio ratio-16x9 mt-7 mt-sm-8 mt-xl-9" data-aos="fade-up" data-aos-duration="2500">
                {{-- <img src="{{ asset('assets/img/bg/bg4.jpg') }}" --}}
                <img src="{{ asset($home->big_image ?? 'assets/css/font/Inter-italic.var.woff2') }}" class="object-fit-cover rounded-3 shadow" alt="منشأة بونا"
                    loading="lazy">
            </div>
        </div>
    </div>


    <div class="overflow-hidden py-6 py-sm-7 py-xl-8">
        <div class="container">
            <div class="text-center mx-auto" style="max-width:700px;">
                <h2 class="m-0 fw-semibold text-uppercase" style="color: #4AC1E0;">
                    شركاؤنا
                </h2>
                <div class="m-0 mt-2 fw-bold display-6" style="color: #1226AA;">
                    نعتز بثقة شركائنا وعملائنا في بونا
                </div>
                <p class="m-0 mt-3 text-muted fs-5">
                    بفضل ثقة شركائنا من الشركات والفنادق والمجمعات السكنية،
                    أصبحت <strong>بونا Bona Laundry</strong> الخيار الأول لخدمات الغسيل المؤتمتة عالية الجودة في المملكة.
                </p>
            </div>

            <div class="mt-5">
                <div class="glide glideHighLinear">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides align-items-center text-center">


                            @foreach ($partners as $partner)
                                <li class="glide__slide">
                                    <div class="p-4"><a href="{{ $partner->link ?? ''}}" target="_blank" rel="noopener">
                                            <img src="{{ asset($partner->logo ?? 'assets/css/font/Inter-italic.var.woff2') }}" alt="{{ $partner->name }}"
                                                class="img-fluid" style="max-height:80px; object-fit:contain;"></a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <!-- النص والنموذج -->
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 fw-semibold text-uppercase" style="color:#4AC1E0;">
                            تواصل معنا
                        </h2>
                        <p class="m-0 mt-2 fw-bold display-6" style="color:#1226AA;">
                            هل لديك استفسار أو طلب خدمة؟ يسعدنا تواصلك معنا في بونا
                        </p>
                        <p class="m-0 mt-3 text-muted fs-5">
                            فريقنا جاهز لخدمتك والإجابة على جميع أسئلتك حول خدمات الغسيل والتوصيل الذكي والخزائن المؤتمتة.
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-5">
                        @if (session('success'))
                            <div class="alert alert-success text-center mb-4">{{ session('success') }}</div>
                        @endif
                        <form class="row g-4 needs-validation" id="bonaForm"
                            action="{{ route('frontend.bonaform.store') }}" method="POST" novalidate>
                            @csrf

                            <div class="col-md-6">
                                <label for="nameForm" class="form-label text-sm">
                                    الاسم الكامل <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name" class="form-control form-control-sm" id="nameForm"
                                    required>
                                <div class="invalid-feedback text-xs">الرجاء إدخال الاسم الكامل.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="phoneForm" class="form-label text-sm">
                                    رقم الجوال <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="phone" class="form-control form-control-sm" id="phoneForm"
                                    required>
                                <div class="invalid-feedback text-xs">الرجاء إدخال رقم الجوال.</div>
                            </div>

                            <div class="col-md-12">
                                <label for="emailForm" class="form-label text-sm">
                                    البريد الإلكتروني <span class="text-danger">*</span>
                                </label>
                                <input type="email" name="email" class="form-control form-control-sm" id="emailForm"
                                    required>
                                <div class="invalid-feedback text-xs">الرجاء إدخال البريد الإلكتروني.</div>
                            </div>

                            <div class="col-md-12">
                                <label for="subjectForm" class="form-label text-sm">
                                    نوع الاستفسار <span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" name="subject" id="subjectForm" required>
                                    <option value="">اختر...</option>
                                    <option>طلب خدمة غسيل</option>
                                    <option>شكاوى واقتراحات</option>
                                    <option>شراكات وعقود</option>
                                    <option>أخرى</option>
                                </select>
                                <div class="invalid-feedback text-xs">الرجاء اختيار نوع الاستفسار.</div>
                            </div>

                            <div class="col-12">
                                <label for="messageForm" class="form-label text-sm">
                                    الرسالة <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control form-control-sm" name="message" id="messageForm" rows="3" required></textarea>
                                <div class="invalid-feedback text-xs">الرجاء كتابة الرسالة.</div>
                            </div>

                            <div class="col-12 text-center pt-3">
                                <button type="submit" class="btn btn-lg text-white fw-semibold"
                                    style="background-color:#1226AA; border-radius:10px;">
                                    إرسال الرسالة
                                </button>
                            </div>

                            <div class="col-12" id="bonaMessageSent"></div>
                        </form>
                    </div>
                </div>

                <!-- صورة جانبية -->
                <div class="d-none d-xl-block col-12 col-xl-7" data-aos="fade-left" data-aos-duration="2000">
                    <div class="h-100 position-relative ms-xxl-5">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n1 rounded-4 shadow-sm">
                            <img src="{{ asset('assets/img/bg/bg7.jpg') }}"
                                class="w-100 h-100 rounded-4 object-fit-cover" alt="مغاسل بونا - تواصل معنا"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3">
            <img src="{{ $home && $home->cta_background ? asset($home->cta_background) : asset('assets/img/bg/laundry-cta.jpg') }}"
                 class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" alt="Bona Call To Action">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.1) brightness(0.85);"></div>

            <div class="px-5 text-center">
                <h2 class="fw-bold display-6">{{ $home->cta_title ?? 'وفّر وقتك، واترك الغسيل علينا' }}</h2>
                <p class="mt-3 fs-5">{!! $home->cta_subtitle ?? 'حمّل تطبيق بونا الآن أو احجز خدمتك عبر الموقع لتستمتع بغسيل احترافي وسريع.' !!}</p>
                <a href="{{ $home->cta_button_link ?? route('rooms.show') }}" class="btn btn-lg btn-primary text-white mt-3">
                    {{ $home->cta_button_text ?? 'احجز خدمتك الآن' }}
                </a>
            </div>
        </div>
    </div>
</div>


    <script>
        // عند فتح المودال – تشغيل الفيديو
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(btn => {
            btn.addEventListener('click', function() {
                document.getElementById('videoFrame').src = this.getAttribute('data-bs-src');
            });
        });

        // عند إغلاق المودال – إيقاف الفيديو
        document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
            document.getElementById('videoFrame').src = '';
        });
    </script>
    <!-- Glide.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">

    <!-- Glide.js JS -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>

    <script>
        new Glide('.myPartners', {
            type: 'carousel',
            perView: 6,
            autoplay: 2500,
            hoverpause: true,
            breakpoints: {
                1200: {
                    perView: 5
                },
                992: {
                    perView: 4
                },
                768: {
                    perView: 3
                },
                576: {
                    perView: 2
                }
            }
        }).mount();
    </script>

@endsection
