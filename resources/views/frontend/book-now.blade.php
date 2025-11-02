@extends('frontend.layouts.master')

@section('title', 'احجز الآن | فنادق ومنتجعات إنالة')

@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/hotel-595587_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
       احجز إقامتك الآن
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
       لا تنتظر! احجز غرفتك الآن واستمتع بإقامة مريحة وفاخرة في فنادقنا. تجربة لا تُنسى بانتظارك.
    </p>
</section>
<section class="booking-section">
    <div class="container">
        <h1 class="page-title">احجز إقامتك الآن</h1>
        <p class="page-subtitle">استمتع بتجربة فندقية فاخرة في فنادق ومنتجعات إنالة 🌿</p>

        <form class="booking-form">
            <!-- Personal Info -->
            <div class="form-group">
                <h3>معلومات النزيل</h3>
                <div class="grid">
                    <div>
                        <label>الاسم الكامل</label>
                        <input type="text" placeholder="أدخل اسمك الكامل" required>
                    </div>
                    <div>
                        <label>البريد الإلكتروني</label>
                        <input type="email" placeholder="example@email.com" required>
                    </div>
                    <div>
                        <label>رقم الجوال</label>
                        <input type="tel" placeholder="05xxxxxxxx" required>
                    </div>
                </div>
            </div>

            <!-- Booking Info -->
            <div class="form-group">
                <h3>تفاصيل الحجز</h3>
                <div class="grid">
                    <div>
                        <label>تاريخ الوصول</label>
                        <input type="date" required>
                    </div>
                    <div>
                        <label>تاريخ المغادرة</label>
                        <input type="date" required>
                    </div>
                    <div>
                        <label>عدد النزلاء</label>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4+</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Room Type -->
            <div class="form-group">
                <h3>اختيار نوع الغرفة</h3>
                <div class="rooms-grid">
                    <div class="room-card">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=800&q=80" alt="غرفة فاخرة">
                        <h4>غرفة فاخرة</h4>
                        <p>سرير مزدوج كبير - فطور مجاني - إطلالة على المدينة</p>
                        <span class="price">400 ريال / الليلة</span>
                        <input type="radio" name="room" value="luxury" required>
                    </div>

                    <div class="room-card">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="جناح ملكي">
                        <h4>جناح ملكي</h4>
                        <p>غرفة مع جاكوزي خاص وخدمة فاخرة 24/7</p>
                        <span class="price">950 ريال / الليلة</span>
                        <input type="radio" name="room" value="royal">
                    </div>

                    <div class="room-card">
                        <img src="../img/break-649351_1280.jpg" alt="غرفة عائلية">
                        <h4>غرفة عائلية</h4>
                        <p>سعة 4 أشخاص - مساحة واسعة - خدمات عائلية متكاملة</p>
                        <span class="price">650 ريال / الليلة</span>
                        <input type="radio" name="room" value="family">
                    </div>
                </div>
            </div>

            <!-- Payment Info -->
            <div class="form-group">
                <h3>طريقة الدفع</h3>
                <div class="payment-methods">
                    <label><input type="radio" name="payment" checked> بطاقة ائتمان</label>
                    <label><input type="radio" name="payment"> الدفع عند الوصول</label>
                    <label><input type="radio" name="payment"> تحويل بنكي</label>
                </div>
            </div>

            <!-- Notes -->
            <div class="form-group">
                <h3>ملاحظات إضافية</h3>
                <textarea rows="4" placeholder="اكتب أي طلبات خاصة أو ملاحظات إضافية..."></textarea>
            </div>

            <!-- Submit -->
            <div class="submit-container">
                <button type="submit" class="btn-book">تأكيد الحجز الآن</button>
            </div>
        </form>
    </div>
</section>

@endsection

<style>
.booking-section {
    padding: 80px 20px;
    background: linear-gradient(180deg, #fff 0%, #f8f9fa 100%);
    font-family: 'Cairo', sans-serif;
}
.container {
    max-width: 1000px;
    margin: 0 auto;
}
.page-title {
    text-align: center;
    font-size: 2.5rem;
    color: #2d2d2d;
    margin-bottom: 10px;
}
.page-subtitle {
    text-align: center;
    font-size: 1rem;
    color: #555;
    margin-bottom: 50px;
}
.booking-form {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
}
.form-group {
    margin-bottom: 50px;
}
.form-group h3 {
    color: #D9EF82;
    margin-bottom: 20px;
}
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}
label {
    font-weight: 600;
    color: #333;
}
input, select, textarea {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 10px;
    outline: none;
    transition: 0.3s;
}
input:focus, select:focus, textarea:focus {
    border-color: #D9EF82;
    box-shadow: 0 0 5px rgba(217,239,130,0.5);
}
.rooms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}
.room-card {
    background: #fafafa;
    border-radius: 15px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    transition: 0.3s;
    position: relative;
}
.room-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}
.room-card img {
    border-radius: 10px;
    width: 100%;
    height: 180px;
    object-fit: cover;
    margin-bottom: 15px;
}
.room-card h4 {
    color: #333;
    margin-bottom: 8px;
}
.room-card p {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 10px;
}
.room-card .price {
    color: #D9EF82;
    font-weight: bold;
    font-size: 1rem;
}
.payment-methods {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    font-size: 0.95rem;
}
textarea {
    resize: none;
}
.submit-container {
    text-align: center;
}
.btn-book {
    background-color: #D9EF82;
    color: #fff;
    border: none;
    padding: 15px 30px;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}
.btn-book:hover {
    background-color: #c5e66f;
}
@media (max-width: 768px) {
    .page-title { font-size: 2rem; }
    .booking-form { padding: 25px; }
}
</style>
