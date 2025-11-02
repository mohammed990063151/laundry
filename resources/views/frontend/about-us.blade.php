{{-- @extends('frontend.layouts.master')

@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/who-2985525_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
        من نحن
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
         نحن في <strong>فنادق إنالة</strong> نسعى لتقديم أفضل تجربة إقامة لضيوفنا من خلال
                توفير غرف فاخرة، خدمات متميزة، وبيئة مريحة وممتعة. هدفنا هو ضمان رضاكم
                وجعل زيارتكم لا تُنسى.
    </p>
</section>
<!-- ======= About Section ======= -->
<section class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-title">من نحن</h2>
                <p class="section-subtitle">رحلة من التميز في عالم الضيافة</p>
                <p class="about-description">
                    نحن في <strong>فنادق ومنتجعات انالة</strong> نؤمن بأن الراحة والفخامة ليست مجرد تفاصيل،
                    بل تجربة متكاملة يعيشها ضيوفنا منذ لحظة الوصول.
                    نمتلك سلسلة من الفنادق والمنتجعات الفاخرة المنتشرة في مدن المملكة العربية السعودية،
                    حيث نحرص على تقديم تجربة ضيافة راقية تجمع بين الأصالة السعودية والخدمة العالمية.
                </p>

                <div class="about-stats">
                    <div class="stat">
                        <h3>10+</h3>
                        <p>سنوات من الخبرة</p>
                    </div>
                    <div class="stat">
                        <h3>15+</h3>
                        <p>فنادق ومنتجعات</p>
                    </div>
                    <div class="stat">
                        <h3>100K+</h3>
                        <p>ضيف سعيد</p>
                    </div>
                </div>

                <a href="{{ route('frontend.our-services') }}" class="btn-explore">اكتشف خدماتنا</a>
            </div>

            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80" alt="About Enala Hotels">
            </div>
        </div>
    </div>
</section>

@endsection

<!-- ===== CSS Section ===== -->
<style>
.about-section {
    padding: 80px 20px;
    background: linear-gradient(180deg, #fff 0%, #f5f5f5 100%);
}

.about-content {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 50px;
    max-width: 1200px;
    margin: 0 auto;
}

.about-text {
    flex: 1 1 500px;
}

.about-image {
    flex: 1 1 400px;
    text-align: center;
}

.about-image img {
    width: 100%;
    max-width: 480px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    transition: transform 0.4s ease;
}

.about-image img:hover {
    transform: scale(1.05);
}

.section-title {
    color: #D9EF82;
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.section-subtitle {
    color: #666;
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.about-description {
    color: #333;
    line-height: 1.8;
    font-size: 1rem;
    margin-bottom: 30px;
}

.about-stats {
    display: flex;
    gap: 40px;
    margin-bottom: 30px;
}

.stat h3 {
    color: #D9EF82;
    font-size: 2rem;
    margin-bottom: 5px;
}

.stat p {
    color: #555;
    font-size: 0.95rem;
}

.btn-explore {
    display: inline-block;
    background-color: #D9EF82;
    color: #fff;
    padding: 12px 25px;
    border-radius: 10px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
}

.btn-explore:hover {
    background-color: #c5e26c;
}

@media (max-width: 768px) {
    .about-content {
        flex-direction: column-reverse;
        text-align: center;
    }
    .about-stats {
        justify-content: center;
    }
}
</style> --}}
{{-- resources/views/frontend/about.blade.php --}}
@extends('frontend.layouts.master')

@section('title', 'من نحن - شركة مضياف')

@section('content')

@php
$bg = $about->header_image ? asset($about->header_image) : asset('img/criticism-3083099_1280.jpg');
@endphp

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/who-2985525_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size:3rem; color:#D9EF82; margin-bottom:10px;">
        {{ $about->title }}
    </h1>
    @if($about->subtitle)
    <p style="max-width:800px;margin:auto;font-size:1.1rem;line-height:1.8;color:#eee;">
        {{ $about->subtitle }}
    </p>
    @endif
</section>

<section class="about-page" style="padding:70px 20px;background:#fafafa;font-family:'Cairo',sans-serif;">
    <div class="container" style="max-width:1100px;margin:auto;">
        <div class="intro" style="background:#fff;border-radius:18px;padding:30px;box-shadow:0 2px 10px rgba(0,0,0,.06);">
            @if($about->intro)
                <p style="font-size:1.05rem;color:#333;line-height:1.9;margin:0;">{{ $about->intro }}</p>
            @endif
        </div>

        <div class="points" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px;margin-top:25px;">
            @foreach (['point1','point2','point3','point4'] as $p)
                @if($about->$p)
                    <div style="background:#fff;border-radius:14px;padding:18px;border:1px solid #eef4ef;">
                        <span style="font-size:20px;margin-{{ app()->getLocale()=='ar'?'left':'right' }}:8px;">✅</span>
                        <span style="font-weight:700;color:#1b3b26;">{{ $about->$p }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

@endsection

