@extends('frontend.layouts.master')

@section('title', $service->title)

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>

/* =========================================
   ✨ Hero Section
   ========================================= */
.hero-header {
    height: 420px;
    position:relative;
    background:url('{{ asset($service->image) }}') center/cover no-repeat;
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

/* =========================================
   ✨ Details
   ========================================= */
.details-section {
    padding:60px 15px;
    background:#fff;
}
.details-section h2 {
    font-weight:700;
    color:#1b3b26;
}

/* =========================================
   ✨ Gallery
   ========================================= */
.gallery-section {
    padding:60px 15px;
    background:#f5f7f5;
}
.swiper {
    height:320px;
}
.swiper-slide img {
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:15px;
    cursor:pointer;
    transition:0.3s;
}

/* Lightbox */
.lightbox {
  display:none;
  position:fixed;
  inset:0;
  background:rgba(0,0,0,0.92);
  justify-content:center;
  align-items:center;
  z-index:9999;
}
.lightbox img {
  max-width:90%;
  max-height:85%;
}
.lightbox .close {
  position:absolute;
  top:15px; right:25px;
  color:#fff;
  font-size:40px;
  cursor:pointer;
}

/* =========================================
   ✨ Related Services
   ========================================= */
.related-services h3 {
    font-weight:700;
    margin-bottom:30px;
    color:#1b3b26;
}
.related-card img {
    border-radius:12px;
    object-fit:cover;
    height:200px;
}
.related-card:hover img {
    transform:scale(1.06);
}

</style>

@section('content')

<!-- ===========================
     ✨ HERO
     ============================ -->
<div class="hero-header">
    <div class="content" data-aos="fade-up">
        <h1>{{ $service->title }}</h1>
        <p>{!! $service->short_description ?? 'خدمة عالية الجودة بمعايير احترافية' !!}</p>
    </div>
</div>


<!-- ===========================
     ✨ Details Section
     ============================ -->
<div class="container details-section">

    <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="{{ asset($service->image) }}" class="img-fluid rounded shadow">
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
            <h2>{{ $service->title }}</h2>
            <p class="mt-3 fs-5">{!! $service->description !!}</p>

            <a href="https://wa.me/966500000000?text=اريد%20خدمة%20{{ urlencode($service->title) }}"
               class="btn btn-success btn-lg mt-3">
               اطلب الخدمة الآن عبر واتساب
            </a>
        </div>
    </div>

    <hr class="my-5">

    <!-- تفاصيل إضافية -->
    @foreach ($service->details as $detail)

        @if($detail->title)
            <h3 class="fw-bold mt-4">{{ $detail->title }}</h3>
        @endif

        @if($detail->long_description)
            <p class="fs-6">{!! nl2br(e($detail->long_description)) !!}</p>
        @endif

        @if($detail->image)
            <img src="{{ asset('storage/'.$detail->image) }}" class="img-fluid rounded mb-4 shadow">
        @endif

        <!-- معرض الصور -->
        @if($detail->gallery)
        <section class="gallery-section mt-5">
            <h3 class="text-center fw-bold mb-4">📸 معرض الصور</h3>

            <div class="swiper myGallerySwiper">
                <div class="swiper-wrapper">
                    @foreach($detail->gallery as $img)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/'.$img) }}" class="gallery-img">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        @if($detail->video_url)
            <div class="mt-4">
                <iframe width="100%" height="360" src="{{ $detail->video_url }}" allowfullscreen></iframe>
            </div>
        @endif

        <hr class="my-5">
    @endforeach

</div>




<!-- ===========================
     ✨ Related Services
     ============================ -->
<section class="py-5 related-services">
    <div class="container">
        <h3>خدمات أخرى</h3>

        <div class="row">
            @foreach($services as $item)
            <div class="col-md-4 mb-4">
                <div class="card related-card shadow-sm h-100">
                    <img src="{{ asset($item->image) }}" class="card-img-top">

                    <div class="card-body text-center">
                        <h5 class="fw-bold">{{ $item->title }}</h5>
                        <p class="small text-muted">{!! Str::limit($item->description, 80) !!}</p>

                        <a href="{{ route('services.show', $item->slug) }}"
                           class="btn btn-primary mt-3">عرض التفاصيل</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img id="lightboxImg">
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    /* Swiper */
    new Swiper(".myGallerySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 2000 },
        breakpoints: {
            0: { slidesPerView: 1.2 },
            768: { slidesPerView: 2 },
            1200: { slidesPerView: 3 }
        }
    });

    /* Lightbox */
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');

    document.querySelectorAll('.gallery-img').forEach(img => {
        img.addEventListener('click', function() {
            lightboxImg.src = this.src;
            lightbox.style.display = 'flex';
        });
    });

    document.querySelector('.lightbox .close').onclick = () => {
        lightbox.style.display = 'none';
    };
});
</script>
