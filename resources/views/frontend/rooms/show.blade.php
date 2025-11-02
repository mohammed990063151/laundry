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
<section class="room-details">
  <div class="container">
    <div class="room-header" data-aos="fade-up">
      <h1>{{ $room['name'] }}</h1>
      <div class="room-prices">
        <span class="old-price">{{ $room['old_price'] }} ر.س</span>
        <span class="new-price">{{ $room['price'] }} ر.س</span>
        <span class="discount">خصم {{ $room['discount'] }}</span>
      </div>
    </div>

    <div class="room-gallery" data-aos="fade-up" data-aos-delay="100">
      @foreach($room['gallery'] as $img)
        <img src="{{ $img }}" alt="{{ $room['name'] }}">
      @endforeach
    </div>

    <div class="room-description" data-aos="fade-up" data-aos-delay="200">
      <h2>تفاصيل الغرفة</h2>
      <p>{{ $room['details'] }}</p>
    </div>

    <div class="room-amenities" data-aos="fade-up" data-aos-delay="300">
      <h2>الخدمات المتوفرة</h2>
      <ul>
        @foreach($room['amenities'] as $item)
          <li>✅ {{ $item }}</li>
        @endforeach
      </ul>
    </div>

    <div class="related-rooms" data-aos="fade-up" data-aos-delay="400">
      <h2>غرف ذات صلة</h2>
      <div class="related-grid">
        @foreach($room['related'] as $rel)
          <div class="related-card">
            <img src="{{ $rel['image'] }}" alt="{{ $rel['name'] }}">
            <h3>{{ $rel['name'] }}</h3>
            <p><span class="old">{{ $rel['old_price'] }} ر.س</span> <span class="new">{{ $rel['price'] }} ر.س</span></p>
            <span class="discount">خصم {{ $rel['discount'] }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({ duration: 1000, once: true });</script>

<style>
.room-details {
  background: #fff;
  padding: 80px 0;
  direction: rtl;
  font-family: "Tajawal", sans-serif;
}

.room-header {
  text-align: center;
  margin-bottom: 40px;
}

.room-header h1 {
  font-size: 34px;
  color: #000;
}

.room-prices {
  margin-top: 10px;
}

.old-price {
  text-decoration: line-through;
  color: #777;
  margin-left: 5px;
}

.new-price {
  color: #000;
  font-weight: bold;
  font-size: 22px;
}

.discount {
  background: #D9EF82;
  color: #000;
  padding: 6px 12px;
  border-radius: 20px;
  margin-right: 8px;
}

.room-gallery {
  display: flex;
  gap: 15px;
  justify-content: center;
  margin-bottom: 40px;
  flex-wrap: wrap;
}

.room-gallery img {
  width: 300px;
  height: 200px;
  object-fit: cover;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.room-gallery img:hover {
  transform: scale(1.05);
}

.room-description {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 40px;
}

.room-description h2 {
  font-size: 24px;
  color: #000;
  margin-bottom: 15px;
}

.room-description p {
  color: #555;
  line-height: 1.8;
}

.room-amenities {
  text-align: center;
  margin-bottom: 50px;
}

.room-amenities ul {
  list-style: none;
  padding: 0;
}

.room-amenities li {
  display: inline-block;
  margin: 10px 15px;
  color: #333;
}

.related-rooms h2 {
  text-align: center;
  font-size: 26px;
  margin-bottom: 30px;
}

.related-grid {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.related-card {
  background: #f9f9f9;
  border-radius: 15px;
  width: 260px;
  padding: 15px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.related-card:hover {
  transform: translateY(-5px);
}

.related-card img {
  width: 100%;
  height: 160px;
  border-radius: 10px;
  object-fit: cover;
}

.related-card h3 {
  font-size: 18px;
  margin: 10px 0;
}

.related-card .old {
  text-decoration: line-through;
  color: #777;
}

.related-card .new {
  color: #000;
  font-weight: bold;
}
</style>
@endsection
