@extends('frontend.layouts.master')

@section('content')

<!-- ✅ BONA HERO SECTION -->
<div class="overflow-hidden position-relative" style="height: 100vh;">

    <!-- خلفية الفيديو -->
    <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover">
        <source src="{{ asset('img/main.mp4') }}" type="video/mp4">
        متصفحك لا يدعم تشغيل الفيديو.
    </video>

    <!-- طبقة تعتيم -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background: rgba(0,0,0,0.6); mix-blend-mode: multiply;"></div>

    <!-- المحتوى -->
    <div class="container position-relative text-white h-100 d-flex align-items-center">
        <div class="row align-items-center w-100">
            <div class="col-12 col-xl-8">
                <div class="py-5 py-md-7 py-xl-8">
                    <div class="text-center text-xl-start">
                        <h1 class="fw-bold display-4 mb-4"
                            style="color: #4AC1E0;"
                            data-aos="fade-up" data-aos-duration="1500">
                            Clean Life <span style="color: #fff;">with BONA</span>
                        </h1>
                        <p class="lead mb-4"
                           data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                           style="max-width:600px;">
                            شبكة مغاسل مركزية مؤتمتة في الرياض تقدم خدمات الغسيل الذكي، التوصيل المنزلي،
                            والخزائن الذكية بتقنيات حديثة تجمع بين النظافة والفخامة.
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-xl-start">
                            <a href="{{ route('frontend.rooms') }}"
                               class="btn btn-lg text-white fw-semibold shadow"
                               style="background-color:#1226AA; border-radius:12px;"
                               data-aos="fade-up" data-aos-delay="300">
                                اطلب الآن
                            </a>
                            <a href="{{ route('frontend.our-services') }}"
                               class="btn btn-lg fw-semibold"
                               style="border:2px solid #4AC1E0; color:#4AC1E0; border-radius:12px;"
                               data-aos="fade-up" data-aos-delay="400">
                                تعرف على خدماتنا
                            </a>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-12 col-xl-4">
                <div class="pt-3 pt-md-4 pt-xl-12 pb-2 pb-md-3 pb-xl-6">
                    <!-- Button trigger modal -->
                    <a class="video-play-button video-btn-modal position-relative" href="javascript:;" data-bs-toggle="modal" data-bs-target="#videoModal" data-bs-src="https://www.youtube.com/watch?v=MNOXcYcvQcQ">
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
                <button type="button" class="btn-close bg-white border position-absolute top-0 end-0 translate-middle me-n3 me-sm-n5 mt-n4 rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item iframeVideo" style="border-radius: 0.75rem;" allow="autoplay"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="overflow-hidden py-7 py-sm-8 py-xl-9" >
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
                نقدم في <strong>بونا Bona</strong> خدمات غسيل احترافية مؤتمتة بالكامل باستخدام تقنيات ذكية وصديقة للبيئة تضمن أعلى معايير النظافة والجودة.
            </p>
        </div>

        <!-- بطاقات الخدمات -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 gy-5 gx-xl-4 mt-5 justify-content-center">
            <!-- خدمة 1 -->
            <div class="col" data-aos="fade-up" data-aos-delay="0">
                <div class="card border-0 shadow-sm h-100">
                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('img/services1.jpg') }}"
                             class="object-fit-cover rounded-top-3" alt="غسيل الملابس" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h3 class="fw-bold text-dark mt-3">غسيل وكي الملابس</h3>
                        <p class="text-muted mt-2">
                            غسيل وكي احترافي للملابس بجودة عالية وتعقيم شامل باستخدام مواد صديقة للبيئة للحفاظ على الأقمشة والمظهر الأنيق.
                        </p>
                    </div>
                </div>
            </div>

            <!-- خدمة 2 -->
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('img/services2.jpg') }}"
                             class="object-fit-cover rounded-top-3" alt="غسيل الأحذية" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h3 class="fw-bold text-dark mt-3">تنظيف الأحذية الفاخرة</h3>
                        <p class="text-muted mt-2">
                            تنظيف ومعالجة احترافية للأحذية الفاخرة باستخدام تقنيات دقيقة تحافظ على الشكل والألوان لتعود كالجديدة تمامًا.
                        </p>
                    </div>
                </div>
            </div>

            <!-- خدمة 3 -->
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('img/services3.jpg') }}"
                             class="object-fit-cover rounded-top-3" alt="غسيل المفروشات" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h3 class="fw-bold text-dark mt-3">غسيل المفروشات والأقمشة</h3>
                        <p class="text-muted mt-2">
                            تنظيف شامل للمفروشات، الستائر، والسجاد بأحدث الأجهزة لضمان إزالة الأتربة والبقع مع الحفاظ على الألوان والنسيج.
                        </p>
                    </div>
                </div>
            </div>

            <!-- خدمة 4 -->
            <div class="col" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('img/services4.jpg') }}"
                             class="object-fit-cover rounded-top-3" alt="العناية بالقطع الفاخرة" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h3 class="fw-bold text-dark mt-3">العناية بالقطع الفاخرة</h3>
                        <p class="text-muted mt-2">
                            معالجة وتنظيف القطع الفاخرة بعناية متناهية وخبرة عالية للحفاظ على تفاصيلها الدقيقة وجودتها الأصلية.
                        </p>
                    </div>
                </div>
            </div>

            <!-- خدمة 5 -->
            <div class="col" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100">
                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('img/services5.jpg') }}"
                             class="object-fit-cover rounded-top-3" alt="التنظيف بالبخار" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h3 class="fw-bold text-dark mt-3">التنظيف بالبخار الذكي</h3>
                        <p class="text-muted mt-2">
                            تقنية حديثة لتنظيف وتعقيم الملابس دون استخدام مواد كيميائية، تمنح نظافة عميقة ولمعاناً طبيعياً.
                        </p>
                    </div>
                </div>
            </div>

            <!-- خدمة 6 -->
            <div class="col" data-aos="fade-up" data-aos-delay="500">
                <div class="card border-0 shadow-sm h-100">
                    <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                        <img src="{{ asset('img/services6.jpg') }}"
                             class="object-fit-cover rounded-top-3" alt="التوصيل الذكي" loading="lazy">
                    </div>
                    <div class="card-body text-center">
                        <h3 class="fw-bold text-dark mt-3">التوصيل الذكي</h3>
                        <p class="text-muted mt-2">
                            استلام وتسليم الطلبات عبر خدمة التوصيل السريع والخزائن الذكية لتجربة مريحة وسهلة من المنزل أو المكتب.
                        </p>
                    </div>
                </div>
            </div>
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

<div class="overflow-hidden py-7 py-sm-8 py-xl-9" >
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <!-- النص -->
            <div class="col-12 col-xl-5 order-last order-xl-first">
                <div class="mx-auto max-w-2xl">
                    <h2 class="m-0 fw-semibold" style="color: #4AC1E0;">
                        من نحن
                    </h2>
                    <p class="m-0 mt-2 fw-bold display-6" style="color: #1226AA;">
                        تجربة غسيل فاخرة تجمع بين النظافة والتقنية
                    </p>
                    <p class="m-0 mt-4 text-muted fs-5">
                        <strong>بونا Bona Laundry</strong> هي شبكة مغاسل مركزية مؤتمتة بالكامل في <strong>الرياض – المملكة العربية السعودية</strong>،
                        تقدم خدمات غسيل وكي احترافية للملابس، الأحذية، والمفروشات،
                        مع حلول ذكية تشمل <strong>التوصيل المنزلي والخزائن الذكية</strong>.
                    </p>
                    <p class="m-0 mt-3 text-muted fs-5">
                        نعتمد في بونا على أنظمة رقمية متطورة ومواد صديقة للبيئة لضمان نظافة مثالية
                        وجودة عالية تلائم أسلوب الحياة العصري، مع التزامنا الكامل بمعايير الفخامة والثقة.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('frontend.our-services') }}"
                           class="icon-link icon-link-hover text-decoration-none fw-bold"
                           style="color: #1226AA;">
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
                        <img src="{{ asset('assets/img/bg/bg2.jpg') }}"
                             {{-- class="object-fit-cover rounded-3 shadow" --}}
                             alt="عن بونا" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <!-- صورة كبيرة أسفل النص -->
        <div class="ratio ratio-16x9 mt-7 mt-sm-8 mt-xl-9" data-aos="fade-up" data-aos-duration="2500">
            <img src="{{ asset('assets/img/bg/bg4.jpg') }}"
                 class="object-fit-cover rounded-3 shadow"
                 alt="منشأة بونا" loading="lazy">
        </div>
    </div>
</div>


<div class="overflow-hidden py-7 py-sm-8 py-xl-9" >
    <div class="container">
        <div id="bonaTestimonials" class="carousel slide pb-5" data-bs-ride="carousel">
            <!-- مؤشرات الشرائح -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#bonaTestimonials" data-bs-slide-to="0" class="active" aria-current="true" aria-label="رأي 1"></button>
                <button type="button" data-bs-target="#bonaTestimonials" data-bs-slide-to="1" aria-label="رأي 2"></button>
                <button type="button" data-bs-target="#bonaTestimonials" data-bs-slide-to="2" aria-label="رأي 3"></button>
            </div>

            <!-- المحتوى -->
            <div class="carousel-inner">
                <!-- رأي 1 -->
                <div class="carousel-item active">
                    <div class="mx-auto text-center" style="max-width: 800px;">
                        <img class="mx-auto" src="{{ asset('img/logo.png') }}" height="55" alt="BONA Laundry" loading="lazy">
                        <figure class="m-0 mt-5">
                            <blockquote class="fw-semibold text-dark fs-5 lh-lg">
                                <p class="m-0" style="
    color: #05235b;
">
                                    “ تجربتي مع <strong>بونا</strong> كانت رائعة! الغسيل نظيف جدًا، التعبئة مرتبة، والتوصيل دقيق في الوقت.
                                    فريق العمل محترف، والتعامل راقٍ للغاية. بالتأكيد أصبحت عميل دائم لديهم. ”
                                </p>
                            </blockquote>

                            <figcaption class="m-0 mt-5">
                                {{-- <img class="mx-auto rounded-circle shadow-sm" width="50" height="50"
                                     src="{{ asset('assets/img/small-team/st2.jpg') }}" alt="عميل بونا" loading="lazy"> --}}
                                <div class="mt-3 d-flex align-items-center justify-content-center gap-2">
                                    <div class="fw-bold text-dark">أحمد القحطاني</div>
                                    <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="text-dark" fill="currentColor">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    <div class="text-muted">عميل في فرع النرجس</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- رأي 2 -->
                <div class="carousel-item">
                    <div class="mx-auto text-center" style="max-width: 800px;">
                        <img class="mx-auto" src="{{ asset('img/logo.png') }}" height="55" alt="BONA Laundry" loading="lazy">
                        <figure class="m-0 mt-5">
                            <blockquote class="fw-semibold text-dark fs-5 lh-lg">
                                <p class="m-0" style="
    color: #05235b;
">
                                    “ أكثر ما أعجبني في <strong>بونا</strong> هو خدمة التوصيل الذكي والخزائن الذكية.
                                    سهولة وسرعة في الاستلام، بالإضافة إلى جودة الغسيل التي تفوق التوقعات. ”
                                </p>
                            </blockquote>

                            <figcaption class="m-0 mt-5">
                                {{-- <img class="mx-auto rounded-circle shadow-sm" width="50" height="50"
                                     src="{{ asset('assets/img/small-team/st3.jpg') }}" alt="عميل بونا" loading="lazy"> --}}
                                <div class="mt-3 d-flex align-items-center justify-content-center gap-2">
                                    <div class="fw-bold text-dark">ريم العتيبي</div>
                                    <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="text-dark" fill="currentColor">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    <div class="text-muted">عميلة في فرع الملقا</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- رأي 3 -->
                <div class="carousel-item">
                    <div class="mx-auto text-center" style="max-width: 800px;">
                        {{-- <img class="mx-auto" src="{{ asset('img/logo.png') }}" height="55" alt="BONA Laundry" loading="lazy"> --}}
                        <figure class="m-0 mt-5">
                            <blockquote class="fw-semibold text-dark fs-5 lh-lg">
                                <p class="m-0" style="
    color: #05235b;
">
                                    “ خدمة احترافية بمعنى الكلمة، تعامل راقٍ وتنظيم ممتاز.
                                    <strong>بونا</strong> تهتم بأدق التفاصيل في الغسيل والتغليف.
                                    شكراً على التجربة المميزة. ”
                                </p>
                            </blockquote>

                            <figcaption class="m-0 mt-5">
                                {{-- <img class="mx-auto rounded-circle shadow-sm" width="50" height="50"
                                     src="{{ asset('assets/img/small-team/st4.jpg') }}" alt="عميل بونا" loading="lazy"> --}}
                                <div class="mt-3 d-flex align-items-center justify-content-center gap-2">
                                    <div class="fw-bold text-dark">سلمان المطيري</div>
                                    <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="text-dark" fill="currentColor">
                                        <circle cx="1" cy="1" r="1" />
                                    </svg>
                                    <div class="text-muted">عميل في فرع الروابي</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <!-- أزرار التنقل -->
            <button class="carousel-control-prev d-none d-xl-inline" type="button" data-bs-target="#bonaTestimonials" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next d-none d-xl-inline" type="button" data-bs-target="#bonaTestimonials" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">التالي</span>
            </button>
        </div>
    </div>
</div>


<div class="overflow-hidden py-6 py-sm-7 py-xl-8" >
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

                        <!-- مثال على شعار شريك -->
                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo1.png') }}"
                                     class="img-fluid" alt="Four Seasons Riyadh" style="max-height:80px;">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo2.png') }}"
                                     class="img-fluid" alt="Marriott Hotel" style="max-height:80px;">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo3.png') }}"
                                     class="img-fluid" alt="مجموعة الحبيب الطبية" style="max-height:80px;">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo4.png') }}"
                                     class="img-fluid" alt="شركة سدر للخدمات" style="max-height:80px;">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo5.png') }}"
                                     class="img-fluid" alt="منتجع نوفا" style="max-height:80px;">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo6.png') }}"
                                     class="img-fluid" alt="الرياض فرونت" style="max-height:80px;">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo7.png') }}"
                                     class="img-fluid" alt="مصرف الراجحي" style="max-height:80px;">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="p-4">
                                <img src="{{ asset('assets/img/clients/logo8.png') }}"
                                     class="img-fluid" alt="Hyatt Regency Riyadh" style="max-height:80px;">
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9" >
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
                     @if(session('success'))
                        <div class="alert alert-success text-center mb-4">{{ session('success') }}</div>
                    @endif
                   <form class="row g-4 needs-validation" id="bonaForm"
      action="{{ route('frontend.bonaform.store') }}"
      method="POST" novalidate>
    @csrf

                        <div class="col-md-6">
                            <label for="nameForm" class="form-label text-sm">
                                الاسم الكامل <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="name" class="form-control form-control-sm" id="nameForm" required>
                            <div class="invalid-feedback text-xs">الرجاء إدخال الاسم الكامل.</div>
                        </div>

                        <div class="col-md-6">
                            <label for="phoneForm" class="form-label text-sm">
                                رقم الجوال <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="phone" class="form-control form-control-sm" id="phoneForm" required>
                            <div class="invalid-feedback text-xs">الرجاء إدخال رقم الجوال.</div>
                        </div>

                        <div class="col-md-12">
                            <label for="emailForm" class="form-label text-sm">
                                البريد الإلكتروني <span class="text-danger">*</span>
                            </label>
                            <input type="email" name="email" class="form-control form-control-sm" id="emailForm" required>
                            <div class="invalid-feedback text-xs">الرجاء إدخال البريد الإلكتروني.</div>
                        </div>

                        <div class="col-md-12">
                            <label for="subjectForm" class="form-label text-sm">
                                نوع الاستفسار <span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm"  name="subject" id="subjectForm" required>
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
                             class="w-100 h-100 rounded-4 object-fit-cover"
                             alt="مغاسل بونا - تواصل معنا" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="portfolio" class="overflow-hidden py-7 py-sm-8 py-xl-9" >
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-semibold text-uppercase" style="color:#4AC1E0;">أعمالنا</h2>
      <h3 class="fw-bold display-6" style="color:#1226AA;">بعض من مشاريعنا وإنجازاتنا</h3>
      <p class="text-muted mt-3 fs-5">نفخر بما نقدمه من حلول احترافية وخدمات متكاملة لعملائنا في مختلف المجالات.</p>
    </div>

    <div class="row g-4">

      <!-- المشروع 1 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 hover-shadow" style="transition:0.3s;">
          <img src="{{ asset('img/project1.jpg') }}" class="card-img-top rounded-3" alt="مشروع 1">
          <div class="card-body">
            <h5 class="card-title fw-bold text-body-emphasis">مغسلة فندقية – الرياض</h5>
            <p class="card-text text-muted small">تجهيز وتشغيل نظام غسيل أوتوماتيكي للفنادق الكبرى بخزائن ذكية وتوصيل آلي.</p>
          </div>
        </div>
      </div>

      <!-- المشروع 2 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 hover-shadow">
          <img src="{{ asset('img/project2.jpg') }}" class="card-img-top rounded-3" alt="مشروع 2">
          <div class="card-body">
            <h5 class="card-title fw-bold text-body-emphasis">نظام خزائن ذكية</h5>
            <p class="card-text text-muted small">تطوير وتنفيذ نظام خزائن تسليم واستلام مؤتمت بالكامل لخدمة العملاء 24/7.</p>
          </div>
        </div>
      </div>

      <!-- المشروع 3 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 hover-shadow">
          <img src="{{ asset('img/project3.jpg') }}" class="card-img-top rounded-3" alt="مشروع 3">
          <div class="card-body">
            <h5 class="card-title fw-bold text-body-emphasis">عقود صيانة مغاسل</h5>
            <p class="card-text text-muted small">عقود صيانة وتشغيل مغاسل أوتوماتيكية للمجمعات السكنية والفنادق.</p>
          </div>
        </div>
      </div>

      <!-- المشروع 4 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 hover-shadow">
          <img src="{{ asset('img/project4.jpg') }}" class="card-img-top rounded-3" alt="مشروع 4">
          <div class="card-body">
            <h5 class="card-title fw-bold text-body-emphasis">تطبيق التوصيل الذكي</h5>
            <p class="card-text text-muted small">ربط نظام التوصيل الذكي بالمغاسل لتوفير تجربة سهلة وسريعة للعملاء.</p>
          </div>
        </div>
      </div>

      <!-- المشروع 5 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 hover-shadow">
          <img src="{{ asset('img/project5.jpg') }}" class="card-img-top rounded-3" alt="مشروع 5">
          <div class="card-body">
            <h5 class="card-title fw-bold text-body-emphasis">تجهيز فروع بونا الجديدة</h5>
            <p class="card-text text-muted small">تصميم وتنفيذ الهوية البصرية وتجهيز الفروع الجديدة في الرياض وجدة.</p>
          </div>
        </div>
      </div>

      <!-- المشروع 6 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 hover-shadow">
          <img src="{{ asset('img/project6.jpg') }}" class="card-img-top rounded-3" alt="مشروع 6">
          <div class="card-body">
            <h5 class="card-title fw-bold text-body-emphasis">توسعة أنظمة الغسيل المركزية</h5>
            <p class="card-text text-muted small">رفع الطاقة الإنتاجية لأنظمة الغسيل المركزية بنسبة 35٪ لتحسين الأداء.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



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
@endsection
