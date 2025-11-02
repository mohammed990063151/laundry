@extends('admin.layouts.dashboard.app')

@section('content')
<style>
    .box-wrapper {
        background: #f7f9f7;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.06);
        transition:.3s;
    }
    .box-wrapper:hover {
        transform: translateY(-3px);
    }

    .form-label {
        font-weight: bold;
        color:#2e4c31;
        margin-bottom: 6px;
    }

    .preview-img {
        width: 110px;
        height: 110px;
        border-radius: 8px;
        object-fit: cover;
        margin-top:10px;
        box-shadow:0 4px 10px rgba(0,0,0,.15);
        transition:.3s;
    }

    .preview-img:hover {
        transform:scale(1.05);
    }

    .input-icon {
        position: absolute;
        right: 12px;
        top: 13px;
        color: #9bbf7d;
    }

    .form-control {
        padding-right: 32px;
        border-radius: 10px;
        border:1px solid #ddd;
    }

    .btn-success {
        background:#9cc752;
        border:none;
    }

    .btn-success:hover {
        background:#8fc043;
        transform: scale(1.03);
    }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <h1><i class="fa fa-star"></i> إضافة رأي عميل جديد</h1>
    </section>

    <section class="content">
        <div class="box-wrapper">

            @include('partials._errors')

            @if(session('success'))
                <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- اسم العميل --}}
                    <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">اسم العميل</label>
                        <i class="fa fa-user input-icon"></i>
                        <input type="text" name="name" class="form-control" placeholder="مثال: أحمد العتيبي" required>
                    </div>

                    {{-- عدد النجوم --}}
                    <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">عدد النجوم (1-5)</label>
                        <i class="fa fa-star input-icon"></i>
                        <input type="number" name="stars" class="form-control" min="1" max="5" placeholder="5" required>
                    </div>

                    {{-- الصورة --}}
                    <div class="col-md-6 mb-4">
                        <label class="form-label"><i class="fa fa-image"></i> صورة العميل (اختياري)</label>
                        <input type="file" name="avatar" class="form-control">

                        {{-- معاينة الصورة بعد الرفع --}}
                        @if(isset($testimonial->avatar))
                            <img src="{{ asset('storage/'.$testimonial->avatar) }}" class="preview-img">
                        @endif
                    </div>

                    {{-- نص المراجعة --}}
                    <div class="col-md-12 mb-3 position-relative">
                        <label class="form-label">نص التقييم</label>
                        <i class="fa fa-comment input-icon"></i>
                        <textarea name="review" class="form-control" rows="4" placeholder="ما رأيك في خدماتنا؟" required></textarea>
                    </div>

                </div>

                <button class="btn btn-success btn-lg mt-2">
                    <i class="fa fa-save"></i> حفظ التقييم
                </button>
            </form>
        </div>
    </section>
</div>

@endsection
