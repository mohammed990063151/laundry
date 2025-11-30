@extends('frontend.layouts.master')

@section('title', $project->title . ' - ' . ($setting->name ?? ''))

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>
/* 🔥 غلاف المشروع */
.header-cover {
    height: 380px;
    position:relative;
    background:url('{{ asset('storage/app/public/' . $project->image) }}') center/cover no-repeat;
}
.header-cover::before {
    content:'';
    position:absolute;
    top:0;left:0;width:100%;height:100%;
    background:rgba(0,0,0,0.55);
}
.header-cover h1 {
    position:absolute;
    bottom:30px;
    left:50%;
    transform:translateX(-50%);
    color:#fff;
    font-size:2.7rem;
    font-weight:700;
    text-shadow:0 2px 10px rgba(0,0,0,0.4);
}
.header-cover p {
    position:absolute;
    bottom:10px;
    left:50%;
    transform:translateX(-50%);
    color:#fff;
    opacity:0.9;
}

/* 🔥 تفاصيل المشروع */
.project-details {
    background:#fff;
    padding:60px 20px;
}
.project-details h2 {
    color:#1b3b26;
    font-weight:700;
    margin-bottom:20px;
}
.project-meta {
    background:#f1f5f1;
    padding:20px;border-radius:10px;
}
.project-meta p { margin:3px 0; }

/* 🔥 معرض الصور */
.gallery-section {
    background:#eef3ee;
    padding:70px 20px;
}
.swiper {
    width:100%;
    height:330px;
}
.swiper-slide {
    transition:0.3s;
}
.swiper-slide img {
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:15px;
    cursor:pointer;
    box-shadow:0 4px 10px rgba(0,0,0,0.15);
}

/* Lightbox */
.lightbox {
  display:none;
  position:fixed;
  left:0;top:0;height:100%;width:100%;
  background:rgba(0,0,0,0.9);
  justify-content:center;
  align-items:center;
  z-index:9999;
}
.lightbox img {
  max-width:90%;
  max-height:85%;
  border-radius:10px;
}
.lightbox .close {
  position:absolute;
  top:20px;right:30px;
  color:#fff;font-size:40px;
  cursor:pointer;
}

/* 🔥 قسم مشاريع مشابهة */
.related-projects img{
    border-radius:10px;
    transition:0.3s;
}
.related-projects img:hover{
    transform:scale(1.05);
}
</style>
<style>
.btn-details {
    display: inline-block;
    padding: 8px 20px;
    background: linear-gradient(135deg, #ea8705, #4cafa5);
    color: #fff !important;
    border-radius: 30px;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    transition: .3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.btn-details:hover {
    background: #D9EF82;
    color: #1b3b26 !important;
    transform: translateY(-3px);
}
.hero-header {
    height: 420px;
    position:relative;
}
.hero-header::before {
    content:'';
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.6);
}
.hero-header .content {
    position:absolute;
    bottom:40px;
    width:100%;
    text-align:center;
    color:white;
}
.hero-header h1 {
    font-size:2.8rem;
    font-weight:700;
}
.hero-header p {
    font-size:1.1rem;
    opacity:0.9;
}

    </style>

{{-- <section class="header-cover">
    <h1>{{ $project->title }}</h1>
    <p>{!! $project->short_description !!}</p>
</section> --}}
<div class="hero-header">
    <div class="content" data-aos="fade-up">
        <h1>{{ $project->title }}</h1>
        <p>{!! $project->short_description ?? '' !!}</p>
    </div>
</div>

<section class="project-details">
    <div class="container" style="max-width:950px;">

        <h2>تفاصيل المشروع</h2>

        <p class="mb-4" style="line-height:1.9;">
            {!! $project->long_description ?? $project->description !!}
        </p>

    {{-- <div class="project-meta mt-4">

    <p><strong>📍 الموقع:</strong> {{ $project->location }}</p>
    <p><strong>📅 تاريخ الإضافة:</strong> {{ $project->created_at->format('Y-m-d') }}</p>
    <p><strong>🖼 عدد صور المعرض:</strong> {{ $project->images->count() }}</p>
    <p><strong>🔗 رابط المشاركة:</strong> {{ url()->current() }}</p>

    <p><strong>⏳ مدة التنفيذ:</strong> {{ $project->duration ?? 'غير محدد' }}</p>
    <p><strong>📌 الحالة:</strong> <span class="badge bg-primary">{{ $project->status ?? 'مكتمل' }}</span></p>

    @if($project->client_name)
    <p><strong>👤 العميل:</strong> {{ $project->client_name }}</p>
    @endif

    @if($project->map_link)
    <p><strong>🗺 موقع المشروع:</strong>
        <a href="{{ $project->map_link }}" target="_blank">عرض على الخريطة</a>
    </p>
    @endif

</div> --}}


    </div>
</section>


<section class="gallery-section">
    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#1b3b26;">📸 معرض الصور</h2>

        @if($project->images->count() > 0)
        <div class="swiper myGallerySwiper">
            <div class="swiper-wrapper">

                @foreach($project->images as $img)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/app/public/' . $img->image) }}" class="gallery-img">
                    </div>
                @endforeach

            </div>
        </div>
        @else
            <p class="text-center text-muted">لا توجد صور إضافية</p>
        @endif

    </div>
</section>

<!-- 🔥 مشاريع مشابهة -->
@if($related->count() > 0)
<section class="py-5 related-projects">
    <div class="container">

        <h2 class="fw-bold mb-4" style="color:#1b3b26;">🎯 مشاريع مشابهة</h2>

        <div class="row g-4">
            @foreach($related as $item)
            <div class="col-6 col-md-4 col-lg-3">
                {{-- <a href="{{ route('projects.show',  $item->slug) }}"> --}}
                    <img src="{{ asset('storage/app/public/' . $item->image) }}" class="img-fluid shadow">
                    <h6 class="mt-2 text-center">{{ $item->title }}</h6>
               <a href="{{ route('projects.show', $project->slug) }}"
       class="btn-details">
        <i class="fa fa-eye"></i> عرض التفاصيل
    </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif


<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <span class="close">&times;</span>
    <img id="lightbox-img">
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    /* 🔥 سلايدر احترافي Coverflow */
    new Swiper(".myGallerySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        autoplay: { delay: 2500 },
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 15,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows: true,
        },
        breakpoints:{
            0:{slidesPerView:1},
            768:{slidesPerView:2},
            1200:{slidesPerView:3}
        }
    });

    /* 🔥 Lightbox */
    const imgs = document.querySelectorAll('.gallery-img');
    const lightbox = document.getElementById('lightbox');
    const lightImg = document.getElementById('lightbox-img');

    imgs.forEach(img => {
        img.addEventListener('click', () => {
            lightImg.src = img.src;
            lightbox.style.display = 'flex';
        });
    });

    document.querySelector('.close').addEventListener('click', () => {
        lightbox.style.display = 'none';
    });

    lightbox.addEventListener('click', e => {
        if(e.target === lightbox) lightbox.style.display='none';
    });

});
</script>

@endsection
