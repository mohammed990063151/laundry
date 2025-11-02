@extends('frontend.layouts.master')

@section('content')
<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/contact-us-6921414_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
        تواصل معنا
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
        نحن في <strong>فنادق إنالة</strong> نرحب بتواصلكم واستفساراتكم في أي وقت.
    </p>
</section>
<section class="rooms-section">
    <h1>الغرف</h1>
    <p>اكتشف مجموعتنا الواسعة من الغرف الفندقية الفاخرة المصممة لتلبية جميع احتياجاتك</p>

    <div class="rooms-container">

        <!-- غرفة 1 -->
        <div class="room-card">
            <div class="room-image">
                <img src="../img/bedroom-349701_1280.jpg" alt="غرفة ديلوكس كينغ">
                <div class="room-overlay">
                    <a href="#" class="room-btn">عرض التفاصيل</a>
                </div>
            </div>
            <div class="room-info">
                <h3>غرفة ديلوكس كينغ</h3>
                <p>استمتع بإقامة فاخرة في هذه الغرفة الأنيقة المزودة بأحدث وسائل الراحة.</p>
                <ul>
                    <li>🛏️ سرير مزدوج كبير</li>
                    <li>📶 واي فاي مجاني</li>
                    <li>🥐 إفطار صباحي شامل</li>
                    <li>🌇 إطلالة رائعة على المدينة</li>
                </ul>
                <a href="{{ route('book.now') }}" class="room-btn-outline">احجز الآن</a>
            </div>
        </div>

        <!-- غرفة 2 -->
        <div class="room-card">
            <div class="room-image">
                <img src="../img/bedroom-2593500_1280.jpg" alt="جناح فاخر">
                <div class="room-overlay">
                    <a href="#" class="room-btn">عرض التفاصيل</a>
                </div>
            </div>
            <div class="room-info">
                <h3>جناح فاخر بإطلالة بانورامية</h3>
                <p>جناح راقٍ يضم غرفة جلوس خاصة وشرفة بإطلالة ساحرة على المدينة.</p>
                <ul>
                    <li>🛋️ غرفة جلوس منفصلة</li>
                    <li>☕ آلة قهوة خاصة</li>
                    <li>🛁 جاكوزي فاخر</li>
                    <li>🌅 شرفة بانورامية</li>
                </ul>
                <a href="{{ route('book.now') }}" class="room-btn-outline">احجز الآن</a>
            </div>
        </div>

        <!-- غرفة 3 -->
        <div class="room-card">
            <div class="room-image">
                <img src="../img/bedroom-7349893_1280.jpg" alt="غرفة مزدوجة فاخرة">
                <div class="room-overlay">
                    <a href="#" class="room-btn">عرض التفاصيل</a>
                </div>
            </div>
            <div class="room-info">
                <h3>غرفة مزدوجة فاخرة</h3>
                <p>غرفة واسعة بأجواء دافئة مثالية للعائلات أو الأصدقاء.</p>
                <ul>
                    <li>🛏️ سريران مريحتان</li>
                    <li>📺 تلفاز ذكي بشاشة كبيرة</li>
                    <li>🧺 خدمة تنظيف يومية</li>
                    <li>🚗 مواقف سيارات مجانية</li>
                </ul>
                <a href="{{ route('book.now') }}" class="room-btn-outline">احجز الآن</a>
            </div>
        </div>

    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

body {
    font-family: 'Cairo', sans-serif;
    background: #f8f8f8;
    color: #333;
}
.rooms-section {
    padding: 60px 20px;
    text-align: center;
}
.rooms-section h1 {
    color: #D9EF82;
    font-size: 2.4rem;
    margin-bottom: 10px;
}
.rooms-section p {
    color: #666;
    margin-bottom: 40px;
}
.rooms-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}
.room-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.room-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.15);
}
.room-image {
    position: relative;
    overflow: hidden;
    height: 230px;
}
.room-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.room-card:hover .room-image img {
    transform: scale(1.05);
}
.room-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.45);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.4s ease;
}
.room-card:hover .room-overlay {
    opacity: 1;
}
.room-btn {
    background: #D9EF82;
    color: #fff;
    padding: 10px 25px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
}
.room-btn:hover {
    background: #c4e366;
}
.room-info {
    padding: 20px;
    text-align: right;
}
.room-info h3 {
    color: #333;
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.room-info p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 10px;
}
.room-info ul {
    list-style: none;
    padding: 0;
    margin: 10px 0 15px;
}
.room-info ul li {
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 6px;
}
.room-btn-outline {
    display: inline-block;
    border: 2px solid #D9EF82;
    color: #D9EF82;
    padding: 8px 18px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
}
.room-btn-outline:hover {
    background: #D9EF82;
    color: #fff;
}
@media (max-width: 768px) {
    .rooms-section h1 { font-size: 2rem; }
}
</style>
@endsection
