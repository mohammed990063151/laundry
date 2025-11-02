{{-- {{-- @extends('frontend.layouts.master')
<style>
    body {
        font-family: 'Cairo', sans-serif;
        background-color: #fafafa;
    }

    .blog-header {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                    url('../img/hotel-1749602_1280.jpg') center/cover;
        text-align: center;
        color: #fff;
        padding: 100px 20px;
    }

    .blog-header h1 {
        font-size: 2.8rem;
        color: #D9EF82;
        margin-bottom: 10px;
    }
    </style>

@section('content')
<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/receptionists-5975962_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
         خدمتنا
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
       نقدم مجموعة من الخدمات المميزة لضيوفنا لضمان إقامة مريحة وممتعة، تشمل الراحة، الترفيه، وخدمات الضيافة الفاخرة.
    </p>
</section>













<section class="amazing-services">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>خدماتنا الرائعة</h2>
      <p>تحقق من خدماتنا الرائعة</p>
    </div>

    <!-- الخدمة 1 -->
    <div class="service-row" data-aos="fade-right">
      <div class="service-image">
        <img src="../img/657dc085f1dcb_151jpg.jpg" alt="صالة العاب رياضية">
      </div>
      <div class="service-content">
        <h3>صالة العاب رياضية</h3>
        <p>اجعل اقامتك افضل صحة وحافظ على لياقتك البدنية بصالة الألعاب الرياضية المجهزة بأحدث معدات اللياقة البدنية.</p>
      </div>
    </div>

    <!-- الخدمة 2 -->
    <div class="service-row reverse" data-aos="fade-left">
      <div class="service-image">
        <img src="../img/657dc1172faec_azy-34961jpg.jpg" alt="قاعة اجتماعات">
      </div>
      <div class="service-content">
        <h3>قاعة اجتماعات</h3>
        <p>قاعة اجتماعات لعقد المؤتمرات واجتماعات الشركات والدورات التدريبية، مجهزة بأحدث الوسائل والخدمات الرائعة.</p>
      </div>
    </div>

    <!-- الخدمة 3 -->
    <div class="service-row" data-aos="fade-right">
      <div class="service-image">
        <img src="../img/6323224c2d9c5_63136758b69271662216024.webp" alt="حمام سباحة">
      </div>
      <div class="service-content">
        <h3>حمام سباحة</h3>
        <p>مسابح خاصة نظيفة ومجهزة لكل الفلل والشاليهات بمنتجعات أناله لتجربة استجمام لا تُنسى.</p>
      </div>
    </div>

    <!-- الخدمة 4 -->
    <div class="service-row reverse" data-aos="fade-left">
      <div class="service-image">
        <img src="../img/6315b138554a6_restaurant.webp" alt="مطاعم">
      </div>
      <div class="service-content">
        <h3>مطاعم</h3>
        <p>تلذذوا بأشهى المأكولات العربية والعالمية مع بوفيه أناله، في جو هادئ وتصاميم عصرية تعكس روح التراث.</p>
      </div>
    </div>
  </div>
</section>

<!-- مكتبة الأنيميشن AOS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
</script>

<style>
.amazing-services {
  background: #fff;
  padding: 80px 0;
  direction: rtl;
  font-family: "Tajawal", sans-serif;
}

.section-title {
  text-align: center;
  margin-bottom: 70px;
}

.section-title h2 {
  font-size: 38px;
  color: #000;
  font-weight: 800;
  position: relative;
  display: inline-block;
}

.section-title h2::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  width: 60px;
  height: 4px;
  background-color: #D9EF82;
  transform: translateX(-50%);
  border-radius: 2px;
}

.section-title p {
  color: #555;
  font-size: 18px;
  margin-top: 15px;
}

.service-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  margin-bottom: 100px;
  flex-wrap: wrap;
}

.service-row.reverse {
  flex-direction: row-reverse;
}

.service-image {
  flex: 1 1 45%;
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.service-image img {
  width: 100%;
  height: 350px;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.service-image::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(217,239,130,0.4) 0%, rgba(255,255,255,0) 100%);
  opacity: 0;
  transition: opacity 0.4s ease;
}

.service-image:hover img {
  transform: scale(1.08);
}

.service-image:hover::after {
  opacity: 1;
}

.service-content {
  flex: 1 1 45%;
  text-align: right;
}

.service-content h3 {
  font-size: 26px;
  color: #000;
  margin-bottom: 15px;
  position: relative;
}

.service-content h3::before {
  content: "";
  position: absolute;
  bottom: -8px;
  right: 0;
  width: 50px;
  height: 3px;
  background-color: #D9EF82;
  border-radius: 2px;
}

.service-content p {
  color: #444;
  font-size: 17px;
  line-height: 1.8;
  margin-top: 25px;
}

@media (max-width: 768px) {
  .service-row {
    flex-direction: column !important;
  }
  .service-content {
    text-align: center;
  }
  .service-content h3::before {
    right: 50%;
    transform: translateX(50%);
  }
}
</style>








@endsection

<!-- ===== CSS Section ===== -->
 --}}
{{-- resources/views/frontend/services.blade.php --}}
{{-- @extends('frontend.layouts.master')

@section('title', 'خدماتنا - مضياف')

@section('content')

<section style="padding:80px 20px;text-align:center;background:#fff;">
    <h2 style="font-size:2.8rem;color:#1a1a1a;margin-bottom:15px;">خدماتنا</h2>
    <p style="max-width:700px;margin:auto;color:#666;">
        نقدم مجموعة متنوعة من الخدمات الزراعية والبيئية المتكاملة وفق أعلى معايير الجودة.
    </p>
</section>

<section style="padding:60px 0;background:#f7f9f8;">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:25px;">

            @foreach ($pagservices as $service)
            <div style="background:#fff;border-radius:18px;padding:25px;text-align:center;box-shadow:0 2px 10px rgba(0,0,0,.05);transition:.3s;">
                <div style="font-size:40px;color:#27ae60;margin-bottom:10px;">
                    <i class="{{ $service->icon }}"></i>
                </div>
                <h3 style="font-size:1.3rem;color:#1b3b26;margin-bottom:8px;">{{ $service->title }}</h3>
                <p style="font-size:.95rem;color:#555;">{{ $service->description }}</p>

                @if ($service->image)
                    <img src="{{ asset($service->image) }}" style="width:80%;border-radius:12px;margin-top:10px;">
                @endif
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection --}}


{{--
@extends('frontend.layouts.master')

@section('title', 'خدماتنا')

@section('content')
<style>
    .service-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        border: 1px solid #eee;
        transition: .3s;
        height: 100%;
    }
    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 0 20px rgba(0,0,0,0.10);
        border-color: #28a745;
    }
    .service-icon {
        font-size: 45px;
        color: #28a745;
        margin-bottom: 15px;
    }
    .service-title {
        font-size: 20px;
        font-weight: 700;
        color: #34495e;
        margin-bottom: 10px;
    }
    .service-desc {
        font-size: 15px;
        color: #666;
        min-height: 70px;
        line-height: 1.7;
    }
</style>

<section class="py-5" style="direction: rtl;">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">خدمات شركة مضياف</h2>
            <p class="text-muted">تعرف على أبرز خدماتنا الزراعية</p>
        </div>

        <div class="row g-4">
            @forelse($pag_service as $service)
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="{{ $service->icon }} service-icon"></i>

                        <h3 class="service-title">{{ $service->title }}</h3>

                        <p class="service-desc">{{ $service->description }}</p>

                        <a href="{{ url('service/'.$service->slug) }}" class="btn btn-success btn-sm rounded-pill mt-2">
                            تفاصيل أكثر
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-center">لا توجد خدمات مسجلة حاليًا</p>
            @endforelse
        </div>

    </div>
</section>

@endsection --}

@extends('frontend.layouts.master')

@section('title', 'خدماتنا الزراعية - شركة مضياف')

@section('content')
<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/blog-09.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h2 style="font-size:2.8rem;color:#f6f5f5;margin-bottom:15px;">
        خدماتنا
    </h2>
    <p style="max-width:800px;margin:auto;color:#f4f6f4;font-size:1.1rem;line-height:1.9;">
        في <strong>شركة مُضياف</strong> نوفر مجموعة متكاملة من الخدمات الزراعية
        والبيئية المصممة خصيصًا لدعم المزارعين وأصحاب المشاريع الخضراء،
        مستندين إلى خبرات هندسية ومعايير جودة عالية. هدفنا مساعدتكم في تحقيق إنتاج
        وفير وحلول عملية تجمع بين الكفاءة والاستدامة.
    </p>
</section>

<style>

body { font-family: 'Tajawal', sans-serif; }

/* خلفية الورق */
.services-section {
    background: url('/img/leaf-bg.png') center/cover no-repeat fixed;
    padding: 80px 20px;
    direction: rtl;
}

/* عنوان */
.section-title {
    text-align: center;
    margin-bottom: 60px;
}
.section-title h2 {
    font-size: 2.8rem;
    font-weight: 800;
    color: #1b3b26;
    position: relative;
    display: inline-block;
}
.section-title h2::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    width: 70px;
    height: 4px;
    background: #D9EF82;
    transform: translateX(-50%);
    border-radius: 2px;
}
.section-title p {
    font-size: 1.1rem;
    color: #555;
    margin-top: 10px;
}

/* بطاقة الخدمة */
.service-box {
    background: #fff;
    padding: 30px 20px;
    border-radius: 18px;
    text-align: center;
    transition: .35s;
    box-shadow: 0 5px 15px rgba(0,0,0,.05);
    position: relative;
    overflow: hidden;
}
.service-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,.12);
}
.service-box::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(217,239,130,.4), rgba(255,255,255,0));
    opacity: 0;
    transition: .4s;
}
.service-box:hover::before { opacity: 1; }

/* الأيقونة */
.service-icon {
    width: 75px;
    height: 75px;
    background: #D9EF82;
    color: #1b3b26;
    font-size: 35px;
    border-radius: 50%;
    line-height: 75px;
    margin: auto;
    margin-bottom: 18px;
    transition: .3s;
}
.service-box:hover .service-icon {
    background: #1b3b26;
    color: #D9EF82;
    transform: rotate(6deg) scale(1.1);
}

/* عنوان الخدمة */
.service-title {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 12px;
    color: #1b3b26;
}

/* وصف */
.service-desc {
    font-size: 15px;
    color: #555;
    height: 70px;
    overflow: hidden;
}

/* زر */
.service-btn {
    background: #1b3b26;
    color: #fff;
    padding: 9px 20px;
    font-size: 14px;
    border-radius: 25px;
    text-decoration: none;
    transition: .3s;
    margin-top: 15px;
    display: inline-block;
}
.service-btn:hover {
    background: #D9EF82;
    color: #000;
}

/* Responsive */
@media(max-width:768px) {
    .service-title { font-size: 20px; }
}

</style>



<section class="services-section">
<div class="container">

    <div class="section-title">
        <h2>خدمات شركة مضياف</h2>
        <p>نقدّم حلولًا زراعية وإبداعية متكاملة لبناء المساحات الخضراء الصحية</p>
    </div>

    <div class="row g-4">
        @forelse($pag_service as $service)
            <div class="col-md-4">
                <div class="service-box">

                    <div class="service-icon">
                        <i class="{{ $service->icon }}"></i>
                    </div>

                    <h3 class="service-title">{{ $service->title }}</h3>

                    <p class="service-desc">{{ Str::limit($service->description, 100) }}</p>

                    {{-- <a href="{{ route('services.show', $service->slug) }}" class="service-btn">
                        تفاصيل أكثر
                    </a> --}

                </div>
            </div>
        @empty
            <p class="text-center text-dark">لا توجد خدمات مسجلة حاليًا</p>
        @endforelse
    </div>

</div>
</section>

@endsection
 --}}
{{-- @extends('frontend.layouts.master')
@section('title', 'خدماتنا الزراعية - شركة مضياف')

@section('content')

<section class="services-hero" style="background: url('{{ asset('img/farm-cover.jpg') }}') center/cover no-repeat;">
    <div class="overlay"></div>
    <div class="container text-center text-white">
        <h1>خدماتنا الزراعية</h1>
        <p>نقدم حلولاً مبتكرة ومستدامة لتحقيق رؤيتكم الخضراء</p>
    </div>
</section>

<section class="services-gallery py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">معرض صور الخدمات</h2>
            <p class="text-muted">استعرض بعضاً من مشاريعنا وخدماتنا الزراعية المميزة</p>
        </div>

        <div class="gallery-grid">
            @foreach ($pag_service as $service)
                @foreach ($service->images as $img)
                <div class="gallery-item" data-aos="zoom-in">
                    <img src="{{ asset( $img->image) }}" alt="{{ $service->title }}">
                    <div class="overlay">
                        <h5>{{ $service->title }}</h5>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>

<section class="services-list py-5">
    <div class="container">
        <div class="row g-4">
            @foreach ($pag_service as $service)
            <div class="col-md-4" data-aos="fade-up">
                <div class="service-card">
                    <div class="icon">
                        <i class="{{ $service->icon }}"></i>
                    </div>
                    <h4>{{ $service->title }}</h4>
                    <p>{{ Str::limit($service->description, 120) }}</p>
                    <a href="#" class="btn btn-outline-success btn-sm mt-3">تفاصيل أكثر</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration:1000, once:true});</script>

<style>
body {font-family:'Tajawal',sans-serif;background:#f8f9f8;}
.services-hero {
    position: relative;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.services-hero .overlay {
    position: absolute; inset: 0;
    background: rgba(0,0,0,0.55);
}
.services-hero h1 {
    font-size: 3rem;
    z-index: 2;
    color: #D9EF82;
    font-weight: 800;
}
.services-hero p {
    z-index: 2;
    color: #fff;
    font-size: 1.2rem;
}

/* Gallery */
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 18px;
}
.gallery-item {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  cursor: pointer;
  transition: transform .3s;
}
.gallery-item img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  transition: transform .4s;
}
.gallery-item:hover img {
  transform: scale(1.08);
}
.gallery-item .overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.45);
  opacity: 0;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  color: #fff;
  padding-bottom: 15px;
  transition: .4s;
}
.gallery-item:hover .overlay {
  opacity: 1;
}
.gallery-item h5 {
  font-size: 1rem;
}

/* Services Cards */
.service-card {
  background:#fff;
  padding:25px;
  border-radius:18px;
  text-align:center;
  box-shadow:0 8px 20px rgba(0,0,0,0.08);
  transition:.3s;
  height:100%;
}
.service-card:hover {
  transform:translateY(-6px);
  box-shadow:0 12px 30px rgba(0,0,0,0.12);
}
.service-card .icon {
  width:70px;height:70px;
  border-radius:50%;
  background:#D9EF82;
  display:flex;align-items:center;justify-content:center;
  font-size:30px;
  color:#1b3b26;
  margin:auto;margin-bottom:15px;
  transition:.3s;
}
.service-card:hover .icon {
  background:#1b3b26;
  color:#D9EF82;
}
.service-card h4 {font-weight:700;color:#1b3b26;margin-bottom:10px;}
.service-card p {color:#555;font-size:15px;}
</style>

@endsection --}}

{{-- @extends('frontend.layouts.master')
@section('title', 'خدماتنا الزراعية | شركة مضياف')

@section('content')

<!-- 🏞️ قسم الغلاف الرئيسي -->
<section class="hero-section position-relative text-center text-white">
  <div class="overlay"></div>
  <div class="container position-relative z-2">
    <h1 class="display-5 fw-bold mb-3">خدماتنا الزراعية</h1>
    <p class="lead mb-4">نزرع الجمال، ونبني بيئة خضراء مستدامة في كل زاوية</p>
    <a href="#services" class="btn btn-light text-success fw-bold rounded-pill px-4 py-2">اكتشف المزيد</a>
  </div>
</section>

<!-- 🌿 قسم التعريف -->
<section class="about-service py-5">
  <div class="container text-center">
    <h2 class="fw-bold text-success mb-3">من نحن</h2>
    <p class="lead text-muted">
      شركة مضياف للزراعة هي شركة سعودية متخصصة في تصميم وتنفيذ وصيانة الحدائق، وتجميل المسطحات الخضراء
      باستخدام أحدث التقنيات الزراعية المستدامة لضمان بيئة خضراء نابضة بالحياة.
    </p>
  </div>
</section>

<!-- 🖼️ قسم الصور -->
<section class="gallery-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">معرض أعمالنا</h2>
      <p class="text-muted">استعرض مشاريعنا الزراعية التي أضفنا لها لمسة من الجمال والراحة</p>
    </div>

    <div class="gallery-grid">
      @foreach ($pag_service as $service)
        @foreach ($service->images as $img)
          <div class="gallery-item" data-aos="zoom-in">
            <img src="{{ asset($img->image) }}" alt="{{ $service->title }}">
            <div class="overlay">
              <h5>{{ $service->title }}</h5>
            </div>
          </div>
        @endforeach
      @endforeach
    </div>
  </div>
</section>

<!-- 🧩 قسم الخدمات -->
<section id="services" class="services-list py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">خدماتنا</h2>
      <p class="text-muted">نقدم باقة متنوعة من الخدمات الزراعية المتميزة</p>
    </div>

    <div class="row g-4">
      @foreach ($pag_service as $service)
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
          <div class="service-card h-100">
            <div class="icon"><i class="{{ $service->icon }}"></i></div>
            <h4>{{ $service->title }}</h4>
            <p>{{ Str::limit($service->description, 130) }}</p>
            <a href="#" class="btn btn-success mt-3 rounded-pill px-4">تفاصيل أكثر</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- 🎥 قسم الفيديو -->
<section class="video-section py-5 position-relative text-center text-white">
  <div class="overlay"></div>
  <div class="container position-relative z-2">
    <h2 class="fw-bold mb-3">فيديو تعريفي بخدماتنا</h2>
    <p class="mb-4">شاهد لمحة سريعة عن مشاريعنا الزراعية وأساليبنا الحديثة في العمل</p>
    <a href="https://www.youtube.com/watch?v=EXAMPLE" target="_blank" class="btn btn-light fw-bold px-5 py-2 rounded-pill">
      <i class="fa fa-play-circle"></i> شاهد الفيديو
    </a>
  </div>
</section>

<!-- 🌟 قسم المميزات -->
<section class="features-section py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold text-dark mb-4">ما يميزنا</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="feature-box">
          <i class="fa fa-seedling"></i>
          <h5>تصاميم إبداعية</h5>
          <p>نصمم المساحات الخضراء بروح فنية تجمع بين الجمال والطبيعة.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box">
          <i class="fa fa-water"></i>
          <h5>أنظمة ري ذكية</h5>
          <p>نستخدم أحدث تقنيات الري لترشيد استهلاك المياه وتحقيق الكفاءة.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box">
          <i class="fa fa-tree"></i>
          <h5>نباتات محلية</h5>
          <p>نوفر نباتات تناسب البيئة السعودية لضمان استدامة المشاريع.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box">
          <i class="fa fa-award"></i>
          <h5>جودة معتمدة</h5>
          <p>جميع خدماتنا تخضع لمعايير الجودة لضمان رضا العملاء.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 💬 قسم التقييمات -->
<section class="reviews-section py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">آراء عملائنا</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="review-card">
          <p>"خدمة رائعة واحترافية عالية. سعدت بالتعامل مع فريق مضياف!"</p>
          <h6>- أحمد الزهراني</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="review-card">
          <p>"تنسيق الحدائق لديهم كان مثاليًا! تجربة تستحق التكرار 👌"</p>
          <h6>- نورة السبيعي</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="review-card">
          <p>"أفضل شركة تعاملت معها في الزراعة والتشجير. التزام وجودة 👍"</p>
          <h6>- خالد العتيبي</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ☎️ قسم التواصل -->
<section class="cta-section text-center text-white py-5">
  <div class="container">
    <h2 class="fw-bold mb-3">هل ترغب بخدمة زراعية احترافية؟</h2>
    <p class="mb-4">نحن جاهزون لتحويل فكرتك إلى مشروع أخضر نابض بالحياة 🌿</p>
    <a href="https://wa.me/966583116161" target="_blank" class="btn btn-light text-success fw-bold px-5 py-2 rounded-pill">
      <i class="fa fa-whatsapp"></i> تواصل معنا الآن
    </a>
  </div>
</section>

<!-- 🌈 Animations -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({ duration: 1000, once: true });</script>

<style>
body {font-family:'Tajawal',sans-serif; background:#f9f9f9;}

/* Hero Section */
.hero-section {
  background: url('{{ asset('img/farm-cover.jpg') }}') center/cover no-repeat;
  height: 80vh;
  display:flex; align-items:center; justify-content:center;
  position:relative;
}
.hero-section .overlay {
  position:absolute; inset:0;
  background:linear-gradient(180deg,rgba(0,0,0,.6),rgba(0,0,0,.4));
}
.hero-section h1 { color:#d9ef82; font-size:3rem; }
.hero-section p { color:#fff; }

/* Gallery */
.gallery-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(280px,1fr));
  gap:20px;
}
.gallery-item {
  position:relative; border-radius:12px; overflow:hidden;
  box-shadow:0 6px 20px rgba(0,0,0,.08);
  transition:.3s;
}
.gallery-item img {
  width:100%; height:230px; object-fit:cover;
  transition:.4s;
}
.gallery-item:hover img { transform:scale(1.1); }
.gallery-item .overlay {
  position:absolute; inset:0;
  background:rgba(0,0,0,.45);
  opacity:0; display:flex; align-items:end; justify-content:center;
  padding-bottom:15px; color:#fff; transition:.4s;
}
.gallery-item:hover .overlay { opacity:1; }

/* Services */
.service-card {
  background:#fff;
  padding:30px;
  border-radius:16px;
  text-align:center;
  box-shadow:0 8px 20px rgba(0,0,0,0.08);
  transition:.3s;
}
.service-card:hover {
  transform:translateY(-6px);
  box-shadow:0 12px 30px rgba(0,0,0,0.15);
}
.service-card .icon {
  width:70px;height:70px;
  background:#d9ef82;
  color:#1b3b26;
  border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:30px;
  margin:auto;margin-bottom:15px;
  transition:.3s;
}
.service-card:hover .icon {
  background:#1b3b26; color:#d9ef82;
}

/* Features */
.feature-box {
  background:#fff;
  padding:25px;
  border-radius:12px;
  box-shadow:0 5px 15px rgba(0,0,0,.06);
  transition:.3s;
}
.feature-box i {
  font-size:30px;
  color:#1b3b26;
  margin-bottom:10px;
}
.feature-box:hover {
  transform:translateY(-5px);
  box-shadow:0 10px 25px rgba(0,0,0,.1);
}

/* Reviews */
.review-card {
  background:#fff;
  padding:25px;
  border-radius:14px;
  box-shadow:0 6px 15px rgba(0,0,0,.08);
  font-style:italic;
  transition:.3s;
}
.review-card:hover { transform:translateY(-5px); }

/* Video Section */
.video-section {
  background:url('{{ asset('img/video-bg.jpg') }}') center/cover no-repeat;
  position:relative;
}
.video-section .overlay { position:absolute; inset:0; background:rgba(0,0,0,.6); }

/* CTA */
.cta-section {
  background:linear-gradient(135deg,#1b3b26,#3f704d);
}
.cta-section .btn:hover {
  background:#d9ef82;
  color:#1b3b26;
}
</style>

@endsection --}}


{{-- @extends('frontend.layouts.master')
@section('title', $service->title . ' - شركة مضياف')
<style>
.btn-modern-light {
    color: #1b3b26 !important;
}
    </style>
@section('content')
<section class="page-header" style="
    text-align: center;
    padding: 90px 20px;
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                url('{{ asset('img/1761304116_image5.jpg') }}') center/cover no-repeat;
    color: #fff;
    position: relative;
">
    <div style="position:relative; z-index:2; max-width: 900px; margin:auto;">
        <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 20px; font-weight:700;">
            خدمات شركة <span style="color:#fff;">المضياف</span>
        </h1>
        <p style="font-size: 1.2rem; line-height: 1.9; color: #f3f3f3;">
            في <strong>شركة المضياف</strong> نؤمن بأن الخدمة الراقية تبدأ من الاهتمام بالتفاصيل.
            لذلك نعمل على تقديم باقة متكاملة من الحلول الزراعية والبيئية والخدمية
            تشمل <strong>تنسيق الحدائق، إدارة المشاريع الزراعية، المشاتل، مكافحة الآفات،</strong>
            بالإضافة إلى توفير <strong>المنتجات والمستلزمات الزراعية</strong> عالية الجودة.
        </p>
        <p style="margin-top:15px; color:#e0e0e0;">
            نهدف إلى تحقيق التوازن بين <span style="color:#D9EF82;">الاستدامة البيئية</span>
            و<span style="color:#D9EF82;">الجودة التشغيلية</span> من خلال فريق متخصص
            يسعى لتقديم تجربة راقية تُعبّر عن معايير الضيافة السعودية الأصيلة.
        </p>
    </div>
</section>

    <!-- 🌿 الغلاف العصري -->
    <section class="hero-modern">
        <div class="hero-bg"></div>
        <div class="container text-center text-white position-relative z-2">
            <h1 class="fw-bold display-4 mb-3 animate__animated animate__fadeInDown">{{ $service->title }}</h1>
            <p class="lead animate__animated animate__fadeInUp" style="max-width:700px;margin:auto;">
                {{ Str::limit($service->description, 150) }}
            </p>
        </div>
    </section>

    <!-- 🖼️ معرض صور احترافي -->
    <section class="image-slider py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">صور من مشاريعنا</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($service->images as $img)
                        <div class="swiper-slide">
                            <img src="{{ asset($img->image) }}" alt="{{ $service->title }}">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- 💡 تفاصيل الخدمة -->
    <section class="service-info py-5" style="
    text-align: center;
">
        <div class="container">
            <div class="row align-items-center gy-5">
                {{--
      <div class="col-lg-6" data-aos="fade-right">
        <div class="image-box">
          <img src="{{ asset(optional($service->images->first())->image ?? 'img/default.jpg') }}" alt="{{ $service->title }}">
        </div>
      </div> --}

                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="fw-bold mb-3 text-gradient">{{ $service->title }}</h2>
                    <p class="fs-5 text-muted" style="line-height: 1.9;">
                        {{ $service->description }}
                    </p>
                    <a href="{{ route('frontend.home') }}" class="btn-modern mt-3">العودة إلى الخدمات</a>
                </div>

            </div>
        </div>
    </section>

    <!-- 🌟 قسم المميزات العصري -->
    {{-- <section class="features-modern py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5" style="
     text-align: center;">مميزات خدمتنا</h2>
            <div class="row g-4">
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="feature-card">
                        <i class="fa-solid fa-seedling"></i>
                        <h5>زراعة مستدامة</h5>
                        <p>حلول بيئية متوازنة للحفاظ على الطبيعة وتحقيق إنتاجية عالية.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="fa-solid fa-droplet"></i>
                        <h5>أنظمة ذكية</h5>
                        <p>نستخدم أحدث التقنيات الذكية في الري والتشجير والتتبع البيئي.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="fa-solid fa-leaf"></i>
                        <h5>نباتات محلية</h5>
                        <p>نختار نباتات تتأقلم مع مناخ المملكة لضمان استدامة المشاريع.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="fa-solid fa-award"></i>
                        <h5>جودة عالية</h5>
                        <p>نلتزم بالتميز من التصميم إلى التنفيذ بخبرة هندسية موثوقة.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}
    <!-- 🌟 قسم المميزات العصري -->
<section class="features-modern py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">مميزات خدمتنا</h2>

    <div class="row g-4 justify-content-center">
      @if($service->features && $service->features->count() > 0)
        @foreach($service->features as $index => $feature)
          <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
            <div class="feature-card">
              <i class="{{ $feature->icon ?? 'fa-solid fa-circle-check' }}"></i>
              <h5 class="mt-2">{{ $feature->title }}</h5>
              @if($feature->description)
                <p>{{ $feature->description }}</p>
              @endif
            </div>
          </div>
        @endforeach
      @else
        <p class="text-center text-muted">لا توجد مميزات مسجلة لهذه الخدمة حاليًا.</p>
      @endif
    </div>
  </div>
</section>


    <!-- 📞 CTA عصري -->
    <section class="cta-modern text-center py-5 text-white">
        <div class="container">
            <h2 class="fw-bold mb-3">ابدأ رحلتك الخضراء معنا 🌿</h2>
            <p class="fs-5 mb-4">تواصل الآن مع فريقنا واحصل على استشارة مجانية لمشروعك الزراعي</p>
            <a href="https://wa.me/{{ $setting->phone ?? '' }}" target="_blank" class="btn-modern-light">
                <i class="fa-brands fa-whatsapp"></i> تواصل عبر واتساب
            </a>
        </div>
    </section><br /><br />

    <!-- مكتبات -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });
    </script>

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background: #f9faf9;
            direction: rtl;
        }

        /* 💚 الغلاف */
        .hero-modern {
            position: relative;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-bg {
            background: linear-gradient(135deg, #1b3b26, #4CAF50);
            position: absolute;
            inset: 0;
            animation: gradientMove 6s infinite alternate ease-in-out;
        }

        @keyframes gradientMove {
            0% {
                background: linear-gradient(135deg, #1b3b26, #4CAF50);
            }

            100% {
                background: linear-gradient(135deg, #2e8641, #1b3b26);
            }
        }

        .hero-modern h1 {
            color: #D9EF82;
            font-weight: 800;
        }

        .hero-modern p {
            color: #fff;
            font-size: 1.2rem;
        }

        /* 🖼️ سلايدر الصور */
        .swiper {
            width: 100%;
            height: 300px;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform .5s;
        }

        .swiper-slide:hover img {
            transform: scale(1.05);
        }

        /* 🧾 تفاصيل الخدمة */
        .image-box img {
            width: 100%;
            border-radius: 18px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .text-gradient {
            background: linear-gradient(90deg, #1b3b26, #4CAF50);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-modern {
            background: linear-gradient(135deg, #1b3b26, #4CAF50);
            color: #fff;
            border-radius: 30px;
            padding: 10px 25px;
            transition: .3s;
            text-decoration: none;
        }

        .btn-modern:hover {
            background: #D9EF82;
            color: #1b3b26;
        }

        /* 🌟 المميزات */
        .feature-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: .3s;
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .feature-card i {
            font-size: 35px;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        /* CTA */
        .cta-modern {
            background: linear-gradient(135deg, #1b3b26, #4CAF50);
        }

        .btn-modern-light {
            background: #fff;
            color: #1b3b26;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: .3s;
            text-decoration: none;
        }

        .btn-modern-light:hover {
            background: #D9EF82;
        }
    </style>

@endsection --}}
{{-- @extends('frontend.layouts.master')

@section('title', 'خدماتنا - شركة مضياف')

@section('content')
<section class="page-header" style="
    text-align: center;
    padding: 90px 20px;
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                url('{{ asset('img/1761304116_image5.jpg') }}') center/cover no-repeat;
    color: #fff;
    position: relative;
">
    <div style="position:relative; z-index:2; max-width: 900px; margin:auto;">
        <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 20px; font-weight:700;">
            خدمات <span style="color:#fff;">شركة المضياف</span>
        </h1>
        <p style="font-size: 1.2rem; line-height: 1.9; color: #f3f3f3;">
            نقدم مجموعة متكاملة من الحلول الزراعية والبيئية باحترافية وجودة عالية.
        </p>
    </div>
</section>

<section class="services-section py-5" style="background:#f9faf9;">
  <div class="container">
    <div class="row g-4">
      @foreach($services as $service)
      <div class="col-lg-4 col-md-6">
        <div class="service-card shadow-sm border-0 rounded-4 overflow-hidden bg-white h-100"
             style="transition: all 0.3s ease; cursor:pointer;"
             onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.1)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)'">

          <div class="service-image" style="height:230px; overflow:hidden;">
            <img src="{{ asset($service->image ?? 'img/default.jpg') }}" alt="{{ $service->title }}"
                 style="width:100%; height:100%; object-fit:cover; transition: transform .4s;">
          </div>

          <div class="p-4 text-center">
            <i class="{{ $service->icon ?? 'fa-solid fa-leaf' }}"
               style="font-size:35px; color:#4CAF50; margin-bottom:10px;"></i>
            <h4 class="fw-bold text-success mb-2">{{ $service->title }}</h4>
            <p class="text-muted small mb-3" style="line-height:1.7;">
              {{ Str::limit($service->description, 120) }}
            </p>
            <a href=""
            {{-- {{ route('frontend.services.show', $service->slug) }} --}
               class="btn-modern mt-2">عرض التفاصيل</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="cta-modern text-center py-5 text-white">
    <div class="container">
        <h2 class="fw-bold mb-3">ابدأ رحلتك الخضراء معنا 🌿</h2>
        <p class="fs-5 mb-4">تواصل الآن مع فريقنا للحصول على استشارة مجانية لمشروعك الزراعي</p>
        <a href="https://wa.me/{{ $setting->phone ?? '' }}" target="_blank" class="btn-modern-light">
            <i class="fa-brands fa-whatsapp"></i> تواصل عبر واتساب
        </a>
    </div>
</section>

<style>
body {
  font-family: 'Tajawal', sans-serif;
  background: #f9faf9;
  direction: rtl;
}

.btn-modern {
  background: linear-gradient(135deg, #1b3b26, #4CAF50);
  color: #fff;
  border-radius: 30px;
  padding: 10px 25px;
  transition: .3s;
  text-decoration: none;
}
.btn-modern:hover {
  background: #D9EF82;
  color: #1b3b26;
}

.cta-modern {
  background: linear-gradient(135deg, #1b3b26, #4CAF50);
}

.btn-modern-light {
  background: #fff;
  color: #1b3b26;
  padding: 10px 25px;
  border-radius: 30px;
  font-weight: 600;
  transition: .3s;
  text-decoration: none;
}
.btn-modern-light:hover {
  background: #D9EF82;
}
</style>
@endsection --}}
@extends('frontend.layouts.master')

@section('title', 'خدماتنا - شركة مضياف')

<style>
body {
  font-family: 'Tajawal', sans-serif;
  direction: rtl;
  background: #f9faf9;
  margin: 0;
  padding: 0;
}

/* 🌿 Flexbox Wrapper */
.services-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
}

/* 🌱 Card Style */
.service-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  overflow: hidden;
  flex: 1 1 calc(33.333% - 25px); /* 3 per row */
  max-width: calc(33.333% - 25px);
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
  cursor: pointer;
}
.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.image-box {
  height: 230px;
  overflow: hidden;
}
.image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .4s ease;
}
.service-card:hover img {
  transform: scale(1.05);
}

.content-box {
  text-align: center;
  padding: 25px;
}
.content-box i {
  font-size: 35px;
  color: #4CAF50;
  margin-bottom: 10px;
}
.content-box h4 {
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 10px;
}
.content-box p {
  color: #777;
  font-size: 0.95rem;
  line-height: 1.7;
  margin-bottom: 15px;
}

/* 🟢 زر التفاصيل */
.btn-modern {
  background: linear-gradient(135deg, #1b3b26, #4CAF50);
  color: #fff;
  border-radius: 30px;
  padding: 8px 22px;
  font-size: 0.9rem;
  text-decoration: none;
  transition: 0.3s;
}
.btn-modern:hover {
  background: #D9EF82;
  color: #1b3b26;
}

/* 💬 CTA */
.cta-modern {
  background: linear-gradient(135deg, #1b3b26, #4CAF50);
}
.btn-modern-light {
  background: #fff;
  color: #1b3b26;
  padding: 10px 25px;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: .3s;
}
.btn-modern-light:hover {
  background: #D9EF82;
}

/* 📱 Responsive Breakpoints */
@media (max-width: 992px) {
  .service-card {
    flex: 1 1 calc(45% - 25px);
    max-width: calc(45% - 25px);
  }
}
@media (max-width: 576px) {
  .service-card {
    flex: 1 1 100%;
    max-width: 100%;
  }
}

 </style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
.image-slider {
  background: #f9faf9;
}
.swiper {
  width: 100%;
  height: 300px;
}
.swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
}
.swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
  transition: transform .5s ease;
}
.swiper-slide:hover img {
  transform: scale(1.05);
}
</style>
@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 90px 20px;
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                url('{{ asset("dashboard_files/img/services/1761304116_image4.jpg") }}') center/cover no-repeat;
    color: #fff;
    position: relative;
">
    <div style="position:relative; z-index:2; max-width: 900px; margin:auto;">
        <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 20px; font-weight:700;">
            خدمات شركة <span style="color:#fff;">المضياف</span>
        </h1>
        <p style="font-size: 1.2rem; line-height: 1.9; color: #f3f3f3;">
            في <strong>شركة المضياف</strong> نؤمن بأن الخدمة الراقية تبدأ من الاهتمام بالتفاصيل.
            لذلك نعمل على تقديم باقة متكاملة من الحلول الزراعية والبيئية والخدمية
            تشمل <strong>تنسيق الحدائق، إدارة المشاريع الزراعية، المشاتل، مكافحة الآفات،</strong>
            بالإضافة إلى توفير <strong>المنتجات والمستلزمات الزراعية</strong> عالية الجودة.
        </p>
        <p style="margin-top:15px; color:#e0e0e0;">
            نهدف إلى تحقيق التوازن بين <span style="color:#D9EF82;">الاستدامة البيئية</span>
            و<span style="color:#D9EF82;">الجودة التشغيلية</span> من خلال فريق متخصص
            يسعى لتقديم تجربة راقية تُعبّر عن معايير الضيافة السعودية الأصيلة.
        </p>
    </div>
</section>



    <!-- 🖼️ معرض صور احترافي -->
    {{-- @foreach ($services as $service)
    <section class="image-slider py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">{{ $service->title }}</h2>

            @if($service->images && $service->images->count())
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($service->images as $img)
                            <div class="swiper-slide">
                                <img src="{{ asset($img->image) }}" alt="{{ $service->title }}">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            @else
                <p class="text-center text-muted">لا توجد صور متاحة لهذه الخدمة.</p>
            @endif
        </div>
    </section>
@endforeach --}}
<section class="image-slider py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">معرض أعمالنا</h2>

    <div class="swiper mySwiperGlobal">
      <div class="swiper-wrapper">
        @foreach ($services as $service)
            @if($service->images && $service->images->count())
                @foreach($service->images as $img)
                    <div class="swiper-slide">
                        <img src="{{ asset($img->image) }}" alt="{{ $service->title }}">
                    </div>
                @endforeach
            @else
                <div class="swiper-slide">
                    <img src="{{ asset('dashboard_files/img/gallery/sample1.jpg') }}" alt="no image">
                </div>
            @endif
        @endforeach
      </div>
    </div>
  </div>
</section>




  <div style="max-width: 900px; margin:auto;">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 20px; font-weight:700;">
      خدمات <span style="color:#fff;">شركة المضياف</span>
    </h1>
    <p style="font-size: 1.2rem; line-height: 1.9; color: #f3f3f3;">
      نقدم مجموعة متكاملة من الحلول الزراعية والبيئية باحترافية وجودة عالية.
    </p>
  </div>
</section>
<br /><br />
<section class="services-flex py-5" style="background:#f9faf9;">
  <div class="container">
    <div class="services-wrapper">
      @foreach($services as $index => $service)
      <div class="service-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        <div class="image-box">
          <img src="{{ asset($service->images->first()->image) }}" alt="{{ $service->title }}">
                    {{-- @if($service->images && $service->images->count())
              <img src="{{ asset($service->images->first()->image) }}" alt="{{ $service->title }}">
          @else
              <img src="{{ asset('img/default.jpg') }}" alt="no image">
          @endif --}}

        </div>
        <div class="content-box">
          <i class="{{ $service->icon ?? 'fa-solid fa-leaf' }}"></i>
          <h4>{{ $service->title }}</h4>
          <p>{{ Str::limit($service->description, 100) }}</p>
          {{-- <a href="" class="btn-modern">عرض التفاصيل</a> --}}
          {{-- {{ route('frontend.services.show', $service->slug) }} --}}
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="cta-modern text-center py-5 text-white" data-aos="zoom-in">
  <div class="container">
    <h2 class="fw-bold mb-3">ابدأ رحلتك الخضراء معنا 🌿</h2>
    <p class="fs-5 mb-4">تواصل الآن مع فريقنا للحصول على استشارة مجانية لمشروعك الزراعي</p>
    <a href="https://wa.me/{{ $setting->phone ?? '' }}" target="_blank" class="btn-modern-light" style="
    color: black;
">
      <i class="fa-brands fa-whatsapp"></i> تواصل عبر واتساب
    </a>
  </div>
</section>
<br /><br />
<!-- ✅ مكتبة AOS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
  duration: 1000,
  once: true,
  offset: 100
});
</script>
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script> --}}
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });
    </script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    @foreach($services as $index => $service)
      new Swiper(".mySwiper-{{ $index }}", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        centeredSlides: true,
        speed: 1000,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".mySwiper-{{ $index }} .swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: { slidesPerView: 1 },
          768: { slidesPerView: 2 },
          1200: { slidesPerView: 3 }
        }
      });
    @endforeach
  });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiperGlobal", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      speed: 3000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      allowTouchMove: false,
      freeMode: true,
      grabCursor: true,
      breakpoints: {
        0: { slidesPerView: 1.3 },
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 }
      }
    });
  });
</script>
{{-- @endpush --}}

{{-- @push('scripts') --}}



@endsection

