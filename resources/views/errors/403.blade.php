@extends('frontend.layouts.master')

@section('title', 'صلاحية الوصول - BONA Laundry')

@section('content')
<section class="py-9 position-relative text-center" style="background-color:#c3eaf4;">
    <div class="container">
        <div class="mx-auto" style="max-width:700px;">

            <!-- 🚫 أيقونة تحذير -->
            <div class="mb-4">
                <i class="fa-solid fa-ban fa-4x text-primary" style="color:#1226AA;"></i>
            </div>

            <!-- 🧾 العنوان الرئيسي -->
            <h1 class="fw-bold mb-3" style="font-size:2.5rem; color:#1226AA;">
                🚫 ليس لديك صلاحية الوصول
            </h1>

            <!-- 📄 النص التوضيحي -->
            <p class="fs-5 text-muted mb-4" style="line-height:1.8;">
                عذرًا، لا تملك الصلاحية لعرض هذه الصفحة.<br>
                تأكد من تسجيل الدخول باستخدام حساب لديه صلاحيات مناسبة أو تواصل مع الإدارة.
            </p>

            <!-- 🔙 زر العودة -->
            <a href="{{ route('frontend.home') }}"
               class="btn btn-lg text-white fw-semibold shadow-sm"
               style="background-color:#1226AA; border-radius:50px; padding:10px 30px;">
                العودة إلى الصفحة الرئيسية
            </a>

        </div>
    </div>

    <!-- خلفية رمزية بشكل فقاعات -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden z-n1">
        <div class="position-absolute rounded-circle bg-white opacity-25" style="width:120px; height:120px; top:20%; left:10%;"></div>
        <div class="position-absolute rounded-circle bg-white opacity-25" style="width:180px; height:180px; bottom:15%; right:15%;"></div>
    </div>
</section>
@endsection
