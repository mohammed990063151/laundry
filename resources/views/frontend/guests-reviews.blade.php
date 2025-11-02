{{-- @extends('frontend.layouts.master')

@section('title', 'آراء النزلاء - فندق إنالة')

@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/criticism-3083099_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
        آراء النزلاء
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
        اكتشف آراء وتجارب زوارنا السابقين مع <strong>فنادق إنالة</strong> واستمتع بخدماتنا المميزة.
    </p>
</section>
<section class="reviews-page">
    <div class="container">
        <h1 class="page-title">آراء النزلاء</h1>
        <p class="page-subtitle">تعرف على ما يقوله ضيوفنا الكرام عن تجربتهم في فندق ومنتجع إنالة 🌿</p>

        <div class="reviews-grid">
            @foreach (range(1, 15) as $i)
            <div class="review-card">
                <div class="review-header">
                    <img src="https://i.pravatar.cc/100?img={{ $i }}" alt="ضيف">
                    <div>
                        <h3>الضيف رقم {{ $i }}</h3>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">
                    كانت تجربتي في فندق إنالة أكثر من رائعة. الغرفة نظيفة، الإطلالة خلابة، والخدمة ممتازة.
                    أشكر جميع العاملين على حسن الضيافة والتنظيم. سأعود مجددًا في أقرب وقت ❤️
                </p>
                <span class="review-date">بتاريخ {{ now()->subDays($i)->format('Y/m/d') }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.reviews-page {
    padding: 80px 20px;
    background: #fafafa;
    font-family: "Cairo", sans-serif;
}
.page-title {
    text-align: center;
    color: #1a1a1a;
    font-size: 2.8rem;
    margin-bottom: 10px;
}
.page-subtitle {
    text-align: center;
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 60px;
}
.reviews-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
}
.review-card {
    background: #fff;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.review-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 25px rgba(0,0,0,0.12);
}
.review-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}
.review-header img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.review-header h3 {
    font-size: 1.2rem;
    color: #222;
    margin: 0;
}
.stars {
    color: #F4C542;
    font-size: 1rem;
}
.review-text {
    font-size: 0.95rem;
    color: #444;
    line-height: 1.7;
    margin-bottom: 10px;
}
.review-date {
    font-size: 0.8rem;
    color: #888;
}
@media (max-width:768px) {
    .page-title { font-size: 2rem; }
    .page-subtitle { font-size: 0.95rem; }
}
</style>
@endsection --}}
{{-- @extends('frontend.layouts.master')

<style>
.reviews-page {
    padding: 80px 20px;
    background: #fafafa;
    font-family: "Cairo", sans-serif;
}
.page-title {
    text-align: center;
    color: #1a1a1a;
    font-size: 2.8rem;
    margin-bottom: 10px;
}
.page-subtitle {
    text-align: center;
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 60px;
}
.reviews-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
}
.review-card {
    background: #fff;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.review-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 25px rgba(0,0,0,0.12);
}
.review-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}
.review-header img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.review-header h3 {
    font-size: 1.2rem;
    color: #222;
    margin: 0;
}
.stars {
    color: #F4C542;
    font-size: 1rem;
}
.review-text {
    font-size: 0.95rem;
    color: #444;
    line-height: 1.7;
    margin-bottom: 10px;
}
.review-date {
    font-size: 0.8rem;
    color: #888;
}
@media (max-width:768px) {
    .page-title { font-size: 2rem; }
    .page-subtitle { font-size: 0.95rem; }
}
</style>
@section('title','آراء عملائنا - شركة مُضياف')

@section('content')


<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/criticism-3083099_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="color:#D9EF82;font-size:3rem;">آراء عملائنا</h1>
    <p>تجارب عملاء مُضياف مع خدماتنا الزراعية والبيئية 🌿</p>
</section>

<section class="reviews-page">
<div class="container">
<div class="reviews-grid">

@foreach($items as $t)
<div class="review-card">
    <div class="review-header">
        <img src="{{ $t->avatar ? asset('storage/'.$t->avatar) : 'https://i.pravatar.cc/100' }}" />
        <div>
            <h3>{{ $t->name }}</h3>
            <div class="stars">{{ str_repeat('⭐',$t->stars) }}</div>
        </div>
    </div>

    <p class="review-text">{{ $t->review }}</p>
    <span class="review-date">{{ $t->created_at?->format('Y-m-d') ?? '-' }}
</span>
</div>


@endforeach

</div>
</div>
</section>

@endsection --}}
@extends('frontend.layouts.master')

@section('title', 'مشاريعنا - شركة مضياف')

@section('content')
{{-- <section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('dashboard_files/img/gallery/1761301329.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
        آراء النزلاء
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
        اكتشف آراء وتجارب زوارنا السابقين مع <strong>فنادق إنالة</strong> واستمتع بخدماتنا المميزة.
    </p>
</section> --}}

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                url('{{ asset('dashboard_files/img/gallery/1761301329.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size:3rem; color:#D9EF82; margin-bottom:10px;">مشاريعنا</h1>
    <p style="max-width:700px; margin:auto; color:#eee; font-size:1.2rem;">
        استعرض بعض المشاريع التي نفذتها شركة مضياف باحترافية عالية في مجالات الزراعة والتنسيق الخارجي.
    </p>
</section>
<br /><br />
<section class="projects py-5" style="background:#f9f9f9;">
    <div class="container">
        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="project-card bg-white border-0 rounded-4 shadow-sm overflow-hidden h-100"
                     style="transition: all 0.3s ease; cursor:pointer;"
                     onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.08)'"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)'">

                    <div class="project-image" style="height:180px; overflow:hidden;">
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                             style="width:100%; height:100%; object-fit:cover; transition: transform .4s;">
                    </div>

                    <div class="p-3">
                        <h5 class="fw-bold text-success mb-2" style="font-size:1.1rem;">{{ $project->title }}</h5>
                        <p class="text-muted small mb-3" style="line-height:1.6;">
                            {{ Str::limit(strip_tags($project->description), 80) }}
                        </p>

                        {{-- <div class="d-flex justify-content-between align-items-center">
                            @if($project->location)
                                <span class="text-secondary small">
                                    <i class="fa-solid fa-location-dot text-success me-1"></i>
                                    {{ $project->location }}
                                </span>
                            @endif
                            <a href=""
                               class="btn btn-outline-success btn-sm rounded-pill px-3">
                                عرض التفاصيل <i class="fa-solid fa-arrow-left-long ms-1"></i>
                            </a>
                        </div> --}}
                        <div class="d-flex justify-content-between align-items-center">
    @if($project->location)
        <span class="text-secondary small">
            <i class="fa-solid fa-location-dot text-success me-1"></i>
            {{ $project->location }}
        </span>
    @endif

    @if($project->completion_date)
        <span class="text-muted small">
            <i class="fa-regular fa-calendar-days text-success me-1"></i>
            {{ \Carbon\Carbon::parse($project->completion_date)->format('d M Y') }}
        </span>
    @endif
</div>

                    </div>

                </div>
            </div>
            <br /><br />
            @endforeach
        </div>
    </div>
</section>
<br /><br />
@endsection
