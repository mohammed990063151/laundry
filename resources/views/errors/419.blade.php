@extends('frontend.layouts.master')

@section('title', '419 - انتهت الجلسة | BONA Laundry')

@section('content')
<section class="py-9 text-center position-relative" style="background-color:#c3eaf4;">
    <div class="container">
        <div class="mx-auto" style="max-width:650px;">
            <div class="mb-4">
                <i class="fa-solid fa-clock-rotate-left fa-4x text-primary" style="color:#1226AA;"></i>
            </div>
            <h1 class="fw-bold mb-3" style="font-size:2.8rem; color:#1226AA;">419 - انتهت الجلسة</h1>
            <p class="fs-5 text-muted mb-4" style="line-height:1.8;">
                انتهت صلاحية الجلسة الخاصة بك لأسباب أمنية.<br>
                الرجاء تحديث الصفحة أو إعادة تسجيل الدخول.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ url()->previous() }}"
                   class="btn text-white fw-semibold shadow-sm"
                   style="background-color:#1226AA; border-radius:50px; padding:10px 30px;">
                    🔄 تحديث الصفحة
                </a>
                <a href="{{ route('frontend.home') }}"
                   class="btn text-dark fw-semibold bg-white shadow-sm"
                   style="border-radius:50px; padding:10px 30px;">
                    🏠 العودة للرئيسية
                </a>
            </div>
        </div>
    </div>

    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden z-n1">
        <div class="position-absolute rounded-circle bg-white opacity-25" style="width:130px; height:130px; top:20%; left:15%;"></div>
        <div class="position-absolute rounded-circle bg-white opacity-25" style="width:180px; height:180px; bottom:15%; right:15%;"></div>
    </div>
</section>
@endsection
