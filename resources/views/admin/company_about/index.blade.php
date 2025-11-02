{{-- resources/views/dashboard/company_about/index.blade.php --}}
@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .about-wrapper {
        background:#f7f9fa;
        padding:25px;
        border-radius:12px;
        box-shadow:0 4px 20px rgba(0,0,0,0.08);
        transition:.3s;
        margin-bottom:25px;
    }
    .about-wrapper:hover {
        box-shadow:0 6px 25px rgba(0,0,0,0.12);
    }

    .form-label {
        font-size:14px;
        font-weight:600;
        color:#34495E;
    }

    .input-icon {
        position:absolute;
        right:10px;
        top:10px;
        color:#aaa;
    }

    .form-control {
        padding-right:35px;
    }

    .preview-box img {
        width:160px;
        border-radius:10px;
        border:3px solid #fff;
        box-shadow:0 0 10px rgba(0,0,0,0.1);
        margin-top:10px;
        transition:.3s;
    }
    .preview-box img:hover {
        transform:scale(1.05);
    }

    .pill {
        background:#D9EF82;
        padding:6px 14px;
        border-radius:50px;
        font-weight:600;
        color:#1C4427;
        margin:3px;
        font-size:13px;
        display:inline-block;
    }

    .section-title {
        font-weight:700;
        margin-bottom:15px;
        display:flex;
        align-items:center;
        gap:6px;
        color:#2c3e50;
        font-size:18px;
    }
    .section-title i {
        color:#D9EF82;
    }

</style>

<div class="content-wrapper">

    {{-- ====== HEADER ====== --}}
    <section class="content-header">
        <h1><i class="fa fa-address-card"></i> إعدادات صفحة الشركة</h1>
    </section>

    {{-- ====== FORM ====== --}}
    <section class="content">

        @if(session('success'))
            <div class="alert alert-success">
                <i class="fa fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        @include('partials._errors')

        <div class="about-wrapper">

            <div class="section-title">
                <i class="fa fa-edit"></i> تعديل محتوى الصفحة
            </div>

            <form action="{{ route('dashboard.company_about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="row">

                    {{-- العنوان --}}
                    <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">عنوان رئيسي</label>
                        <i class="fa fa-heading input-icon"></i>
                        <input type="text" name="title" class="form-control" value="{{ $about->title }}">
                    </div>

                    {{-- سطر مختصر --}}
                    <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">سطر مختصر</label>
                        <i class="fa fa-pen input-icon"></i>
                        <input type="text" name="subtitle" class="form-control" value="{{ $about->subtitle }}">
                    </div>

                    {{-- نبذة --}}
                    <div class="col-md-12 mb-3 position-relative">
                        <label class="form-label">نبذة تعريفية</label>
                        <i class="fa fa-align-left input-icon"></i>
                        <textarea name="intro" rows="4" class="form-control">{{ $about->intro }}</textarea>
                    </div>

                    {{-- النقاط --}}
                    @foreach([1,2,3,4] as $i)
                    <div class="col-md-3 mb-3 position-relative">
                        <label class="form-label">نقطة {{ $i }}</label>
                        <i class="fa fa-check input-icon"></i>
                        <input type="text" name="point{{ $i }}" class="form-control" value="{{ $about->{'point'.$i} }}">
                    </div>
                    @endforeach

                    {{-- صورة هيدر --}}
                    <div class="col-md-6 mb-4">
                        <label class="form-label"><i class="fa fa-image"></i> صورة الهيدر (الخلفية)</label>
                        <input type="file" name="header_image" class="form-control">

                        @if($about->header_image)
                            <div class="preview-box">
                                <img src="{{ asset($about->header_image) }}">
                            </div>
                        @endif
                    </div>

                </div>

                <button class="btn btn-success btn-lg mt-2">
                    <i class="fa fa-save"></i> حفظ التغييرات
                </button>

            </form>

        </div>


        {{-- ====== LIVE PREVIEW ====== --}}
        <div class="section-title mt-4">
            <i class="fa fa-eye"></i> المعاينة المباشرة
        </div>

        <div class="bg-white p-3 rounded shadow-sm">
            <h4>{{ $about->title }}</h4>
            <p>{{ $about->subtitle }}</p>
            <p>{{ $about->intro }}</p>

            @foreach([1,2,3,4] as $i)
                @if($about->{'point'.$i})
                    <span class="pill">{{ $about->{'point'.$i} }}</span>
                @endif
            @endforeach

        </div>

    </section>

</div>
@endsection
