
 @extends('frontend.layouts.master')
@section('title', ' الصفحة خدمتنا - بونا ')
@section('content')

<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative">
    {{-- <img src="{{ $settings && $settings->hero_background ? asset($settings->hero_background) : asset('assets/img/bg/laundry-bg1.jpg') }}"
         class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Laundry"> --}}
          @if ($settinges && $settinges->hero_background)
            @php
                // استخرج الامتداد
                $ext = strtolower(pathinfo($settinges->hero_background, PATHINFO_EXTENSION));
                $isVideo = in_array($ext, ['mp4', 'webm', 'mov']);
            @endphp

            @if ($isVideo)
                <!-- 🎥 فيديو خلفية -->
                <video autoplay muted loop playsinline class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover">
                    <source src="{{ asset($settinges->hero_background) }}" type="video/{{ $ext }}">
                    متصفحك لا يدعم تشغيل الفيديو.
                </video>
            @else
                <!-- 🖼️ صورة خلفية -->
               <img src="{{ $settinges && $settinges->hero_background ? asset($settinges->hero_background) : asset('assets/img/bg/laundry-bg1.jpg') }}"
         class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Laundry">
            @endif
        @endif

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.75; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.9);"></div>

    <div class="position-absolute z-0 top-0 h-100 w-100">
        <div class="container h-100 d-flex align-items-center">
             <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                <h1 class="m-0 mt-7 text-white tracking-tight fw-bold display-5" data-aos="fade" data-aos-duration="2000">
                    خدماتنا في بونا
                </h1>
                <p class="m-0 mt-4 text-white fs-5" data-aos="fade" data-aos-delay="200">
                    حلول غسيل متكاملة تجمع بين النظافة والفخامة
                </p>
            </div>
        </div>
    </div>
</div>


@foreach($services as $index => $service)
@php $isGray = $index % 2 == 1; @endphp
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 {{ $isGray ? 'bg-body-tertiary' : '' }}">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-12 col-xl-5 {{ $isGray ? 'order-first order-xl-last' : '' }}">
                <div class="mx-auto max-w-2xl">
                    @if($service->badge)
                        <h2 class="m-0 text-primary-emphasis text-base fw-semibold">{{ $service->badge }}</h2>
                    @endif
                    <p class="m-0 mt-2 text-body-emphasis display-6 fw-bold">
                        {{ $service->title }}
                    </p>
                    <p class="m-0 mt-4 text-body-secondary fs-5">
                        {!! nl2br(e($service->description)) !!}
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="ratio ratio-4x3">
                    <img src="{{ $service->image ? asset($service->image) : asset('assets/img/bg/bg4.jpg') }}" class="object-fit-cover rounded-3" alt="{{ $service->title }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Big image -->
@if($settinges && $settinges->big_image)
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 d-none d-xl-block">
    <div class="container">
        <div class="ratio ratio-16x9">
            <img src="{{ asset($settinges->big_image) }}" class="object-fit-cover rounded-3" alt="Bona Team">
        </div>
    </div>
</div>
@endif

<!-- Testimonials -->
@if($testimonials->count())
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-secondary">
    <div class="container text-center">
        <h2 class="fw-bold text-body-emphasis mb-5">آراء عملاؤنا</h2>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                @foreach($testimonials as $k => $t)
                    <div class="carousel-item {{ $k == 0 ? 'active' : '' }}">
                        <p class="fs-5 text-body-secondary">“ {{ $t->content }} ”</p>
                        <h5 class="fw-semibold text-body-emphasis mt-3">{{ $t->name }}</h5>
                        @if($t->city)
                            <small class="text-muted">{{ $t->city }}</small>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

<!-- Clients -->
@if($partners->count())
<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
    <div class="container text-center">
        <h2 class="text-primary-emphasis fw-semibold">شركاؤنا</h2>
        <h3 class="fw-bold text-body-emphasis mt-2">نفخر بثقة عملائنا من المؤسسات والفنادق الكبرى</h3>
        <div class="mt-5 d-flex flex-wrap justify-content-center align-items-center gap-4">
            @foreach($partners as $partner)
                <img src="{{ asset($partner->logo) }}" class="img-fluid" alt="{{ $partner->name }}" style="max-height:60px; object-fit:contain;">
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- Call to Action -->
<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3">
            <img src="{{ $settinges && $settinges->cta_background ? asset($settinges->cta_background) : asset('assets/img/bg/laundry-cta.jpg') }}"
                 class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" alt="Bona Call To Action">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.1) brightness(0.85);"></div>

            <div class="px-5 text-center">
                <h2 class="fw-bold display-6">{{ $settinges->cta_title ?? 'وفّر وقتك، واترك الغسيل علينا' }}</h2>
                <p class="mt-3 fs-5">{!! $settinges->cta_subtitle ?? 'حمّل تطبيق بونا الآن أو احجز خدمتك عبر الموقع لتستمتع بغسيل احترافي وسريع.' !!}</p>
                <a href="{{ $settinges->cta_button_link ?? route('rooms.show') }}" class="btn btn-lg btn-primary text-white mt-3">
                    {{ $settinges->cta_button_text ?? 'احجز خدمتك الآن' }}
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Back to top -->
<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
    </svg>
</button>

<script src="{{ asset('assets/libraries/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libraries/glide/glide.min.js') }}"></script>
<script src="{{ asset('assets/libraries/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

@endsection

