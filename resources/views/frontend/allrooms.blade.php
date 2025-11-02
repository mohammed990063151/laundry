@extends('frontend.layouts.master')

@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/bedroom-349701_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
            <h2 style="color:#D9EF82; font-size:2.5rem; font-weight:700;">غرفنا المميزة</h2>
            <p style="color:#eee; font-size:1rem; margin-top:10px;">
                اختر الغرفة التي تناسبك واستمتع بأفضل إقامة مع <strong>فنادق إنالة</strong>
            </p>
</section>


<section class="rooms-section">
    <div class="container">
        <h2 class="section-title">أنواع الغرف لدينا</h2>
        <p class="section-subtitle">اختر الغرفة التي تناسب ذوقك واحتياجاتك</p>

        <div class="rooms-grid">

            <!-- Room 1 -->
            <div class="room-card">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="غرفة ديلوكس">
                <div class="room-info">
                    <h3>غرفة ديلوكس</h3>
                    <p class="price">ابتداءً من <strong>550 ريال</strong> / الليلة</p>
                    <p class="description">
                        غرفة فسيحة بإطلالة جميلة، تحتوي على سرير مزدوج فاخر، منطقة جلوس مريحة،
                        وحمام رخامي مجهز بالكامل.
                    </p>
                    <ul class="features">
                        <li>🛏 سرير كينج سايز</li>
                        <li>🌅 إطلالة بانورامية</li>
                        <li>📶 إنترنت مجاني</li>
                        <li>☕ آلة قهوة</li>
                        <li>🛁 حوض استحمام فاخر</li>
                    </ul>
                    <a href="{{ route('book.now') }}" class="btn-book">احجز الآن</a>
                </div>
            </div>

            <!-- Room 2 -->
            <div class="room-card">
                <img src="../img/bedroom-5664221_1280.jpg" alt="جناح فاخر">
                <div class="room-info">
                    <h3>الجناح الفاخر</h3>
                    <p class="price">ابتداءً من <strong>950 ريال</strong> / الليلة</p>
                    <p class="description">
                        جناح واسع بإطلالة رائعة، مع غرفة معيشة منفصلة ومنطقة طعام راقية،
                        مثالي للعائلات أو الإقامات الطويلة.
                    </p>
                    <ul class="features">
                        <li>🏡 مساحة 80 م²</li>
                        <li>🛋 غرفة معيشة منفصلة</li>
                        <li>📺 تلفاز ذكي 55 بوصة</li>
                        <li>🚿 حمامين</li>
                        <li>🍽 منطقة طعام</li>
                    </ul>
                    <a href="{{ route('book.now') }}" class="btn-book">احجز الآن</a>
                </div>
            </div>

            <!-- Room 3 -->
            <div class="room-card">
                <img src="../img/bedroom-349701_1280.jpg" alt="غرفة اقتصادية">
                <div class="room-info">
                    <h3>الغرفة الاقتصادية</h3>
                    <p class="price">ابتداءً من <strong>350 ريال</strong> / الليلة</p>
                    <p class="description">
                        خيار مثالي للضيوف الباحثين عن الراحة العملية بأسعار مناسبة دون التنازل عن الجودة.
                    </p>
                    <ul class="features">
                        <li>🛏 سرير مريح</li>
                        <li>❄ تكييف مركزي</li>
                        <li>🧺 خدمة تنظيف يومية</li>
                        <li>📞 خدمة الغرف 24 ساعة</li>
                        <li>📶 إنترنت مجاني</li>
                    </ul>
                    <a href="{{ route('book.now') }}" class="btn-book">احجز الآن</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


<!-- ===== CSS Section ===== -->
<style>
.rooms-hero {
    position: relative;
    background: url('https://images.unsplash.com/photo-1501117716987-c8e2a3f7b2f1?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
}
.rooms-hero .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
}
.rooms-hero .hero-text {
    position: relative;
    z-index: 2;
    max-width: 700px;
}
.rooms-hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
    color: #D9EF82;
}
.rooms-hero p {
    font-size: 1.2rem;
    color: #eee;
}

.rooms-section {
    padding: 80px 20px;
    background: #f8f8f8;
}
.section-title {
    text-align: center;
    color: #D9EF82;
    font-size: 2.5rem;
    margin-bottom: 10px;
}
.section-subtitle {
    text-align: center;
    color: #777;
    font-size: 1rem;
    margin-bottom: 50px;
}

.rooms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px,1fr));
    gap: 40px;
}

.room-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.3s;
}
.room-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}
.room-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}
.room-info {
    padding: 25px;
}
.room-info h3 {
    color: #333;
    font-size: 1.4rem;
    margin-bottom: 10px;
}
.price {
    color: #D9EF82;
    font-size: 1.1rem;
    margin-bottom: 15px;
}
.description {
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}
.features {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
    color: #444;
    text-align: right;
}
.features li {
    margin-bottom: 6px;
}
.btn-book {
    display: inline-block;
    background-color: #D9EF82;
    color: #fff;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
}
.btn-book:hover {
    background-color: #c5e26c;
}
@media (max-width: 768px) {
    .rooms-hero h1 {font-size: 2.2rem;}
    .rooms-hero p {font-size: 1rem;}
}
</style>
